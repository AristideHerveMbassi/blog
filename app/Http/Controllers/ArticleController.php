<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Logic\SEO\Seo;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Article::all();

        return view('pages.admin.articles.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $article = new Article ;

        $article->name = $request->name;
        $article->social_media_title = $request->social_media_title;
        $article->social_media_image = $request->featured_image;
        $article->content = $request->content;
        $article->meta_description = $request->meta_description;
        if($request->published =="on"){
        $article->published = 1;
        } else {
            $article->published = 0;
        }
        $article->published_date = $request->published_date;
        $article->featured_image = $request->featured_image;
        $article->author()->associate(Auth::user()->id);

        $article->save();

        return $article;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Article::findOrFail($slug);

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $slug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $slug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $data = Article::where('slug', $slug)->delete();
    }
}
