<?php

namespace App\Http\Controllers\Admin;

use App\BlogPost;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPosts = BlogPost::latest()->get();
        return view('admin.blogpost.index', compact('blogPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogpost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,bmp,png',
            'body' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image)){
            $currantDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currantDate.'-'.uniqid().'.'.$image->getclientoriginalextension();

            if (!Storage::disk('public')->exists('post')){
                Storage::disk('public')->makeDirectory('post');
            }
            $postResize = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('post/'.$imageName, $postResize);
        }else{
            $imageName = 'post.png';
        }

        $blogPost = new BlogPost();
        $blogPost->user_id = Auth::id();
        $blogPost->title = $request->title;
        $blogPost->slug = $slug;
        $blogPost->image = $imageName;
        $blogPost->body = $request->body;
        $blogPost->save();
        Toastr::success('Post successfully saved', 'Success');
        return redirect()->route('admin.blogPost.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        return view('admin.blogpost.edit', compact('blogPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|mimes:jpg,jpeg,bmp,png',
            'body' => 'required',
        ]);
        $blogPost = BlogPost::findOrFail($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image)){
            $currantDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currantDate.'-'.uniqid().'.'.$image->getclientoriginalextension();

            if (!Storage::disk('public')->exists('post/'.$blogPost->image)){
                Storage::disk('public')->makeDirectory('post/'.$blogPost->image);
            }
            if (Storage::disk('public')->exists('post/'.$blogPost->image)){
                Storage::disk('public')->delete('post/'.$blogPost->image);
            }
            $postResize = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('post/'.$imageName, $postResize);
        }else{
            $imageName = $blogPost->image;
        }

        $blogPost->user_id = Auth::id();
        $blogPost->title = $request->title;
        $blogPost->slug = $slug;
        $blogPost->image = $imageName;
        $blogPost->body = $request->body;
        $blogPost->save();
        Toastr::success('Post successfully updated', 'Success');
        return redirect()->route('admin.blogPost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        if (Storage::disk('public')->exists('post/'.$blogPost->image)){
            Storage::disk('public')->delete('post/'.$blogPost->image);
        }
        $blogPost->delete();
        Toastr::success('Post successfully deleted', 'Success');
        return redirect()->back();
    }
}
