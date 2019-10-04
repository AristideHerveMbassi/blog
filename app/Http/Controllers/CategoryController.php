<?php

namespace App\Http\Controllers;

use App\Logic\SEO;
use App\Models\Category;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        
        //return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $categories = Category::withCount('articles')->get();

        return view('pages.admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->only(['name','description']);
        $category = Category::create($data);
        return $category;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $data = Category::where('slug',$slug)->firstOrFail();

        return $data;
    }

    /**
     * Update a specific resource
     * @param CategoryRequest $request
     * @param $slug
     */
    public function update(Category $category, CategoryRequest $request,  $slug)
    {

        $data = $request->only(['name','description']);
        $category = Category::where('slug', $request['slug'])->get();
        return $category;
        //$category->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Category::where('slug', $slug)->delete();
    }


}
