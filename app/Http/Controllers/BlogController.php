<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::all();
        return view('backend.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->des = $request->input('des');
        $blog->slug = $request->input('slug');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('blog/image/', $filename);
            $blog->image = $filename;
        }
        $blog->short_des = $request->input('short_des');
        $blog->meta_title = $request->input('meta_title');
        $blog->meta_des = $request->input('meta_des');
        $blog->meta_keyword = $request->input('meta_keyword');
        $blog->og_title = $request->input('og_title');
        $blog->og_des = $request->input('og_des');
        if($request->hasfile('og_image'))
        {
            $file = $request->file('og_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('blog/og_image/', $filename);
            $blog->og_image = $filename;
        }
        $blog->date = $request->input('date');
        $blog->save();
        return redirect('blog_index')->with('status','Blog data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog ,$id)
    {
        $blog=Blog::find($id);
        return view('backend.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog ,$id)
    {
        $blog = Blog::find($id);
        return view('backend.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog ,$id)
    {
        $blog =Blog::find($id);
        $blog->title = $request->input('title');
        $blog->des = $request->input('des');
        $blog->slug = $request->input('slug');
        if($request->hasfile('image'))
        {
            $destination = 'blog/image/'.$blog->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('blog/image/', $filename);
            $blog->image = $filename;
        }
        $blog->short_des = $request->input('short_des');
        $blog->meta_title = $request->input('meta_title');
        $blog->meta_des = $request->input('meta_des');
        $blog->meta_keyword = $request->input('meta_keyword');
        $blog->og_title = $request->input('og_title');
        $blog->og_des = $request->input('og_des');
        if($request->hasfile('og_image'))
        {
            $destination = 'blog/og_image/'.$blog->og_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('og_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('blog/og_image/', $filename);
            $blog->og_image = $filename;
        }
        $blog->date = $request->input('date');
        $blog->update();
        return redirect('blog_index')->with('status','Blog Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog ,$id)
    {
        $blog = Blog::find($id);
        $destination = 'blog/image/'.$blog->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $blog->delete();
        return redirect()->back()->with('status','Student Image Deleted Successfully');
    }
}
