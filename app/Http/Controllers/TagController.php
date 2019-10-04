<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        //return view('Tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tags = Tag::withCount('articles')->get();
        return view('pages.admin.tags.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $data = $request->only(['name','description']);
        $Tag = Tag::create($data);
        return $Tag;
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
        $data = Tag::where('slug',$slug)->firstOrFail();

        return $data;
    }

    /**
     * Update a specific resource
     * @param TagRequest $request
     * @param $slug
     */
    public function update(Tag $Tag, TagRequest $request,  $slug)
    {

        $data = $request->only(['name','description']);
        $Tag = Tag::where('slug', $request['slug'])->get();
        return $Tag;
        //$Tag->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Tag::where('slug', $slug)->delete();
    }
}
