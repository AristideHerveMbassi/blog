<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

     /**
     * These attributes used as carbon instance
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',

    ];


    /**
     * The attribute used for primary key
     *
     * @var string
     */
        protected $primaryKey = 'id';


    /**
     * Fillable fields for a Category.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'content',
        'slug',
        'meta_description',
        'social_media_title',
        'published',
        'published_date',
        
        
    ];


    /**
     * An article belongs to many categories .
     *
     * @return mixed
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_article');
    }

     /**
     * An article belongs to many tags .
     *
     * @return mixed
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

     /**
     * An article belongs to many users .
     *
     * @return mixed
     */
    public function author()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }


    /**
     * Set the at the create of the instance
     *
     * @param [type] $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
