<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';

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
     * Fillable fields for a Tag.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'slug',
        
    ];


    /**
     * A tag belongs to many articles .
     *
     * @return mixed
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'tag_article');
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
