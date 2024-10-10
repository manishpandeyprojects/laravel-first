<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {

        $blogObj = new Blog();

        $blogObj->name = $request->name;
        $blogObj->description = $request->description;
        $blogObj->user_id = 1;

        $blogObj->save();

        Session::flash('message', 'Blog created Successfully');

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        // Update the blog post with validated data
        $blog->name = $request->name;
        $blog->description = $request->description;

        $blog->save();

        Session::flash('message', 'Blog updated successfully');

        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        Session::flash('message', 'Blog Deleted Successfully');

        return redirect()->route('home.index');
    }
}
