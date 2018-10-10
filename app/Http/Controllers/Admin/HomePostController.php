<?php

namespace App\Http\Controllers\Admin;

use App\HomePost;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePosts = HomePost::latest()->get();
        return view('admin.homepost.index', compact('homePosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homepost.create');
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
            'body' => 'required',
        ]);

        $homePost = new HomePost();
        $homePost->title = $request->title;
        $homePost->body  = $request->body;
        $homePost->save();
        Toastr::success('Data is saved successfully :)', 'Success');
        return redirect()->route('admin.homePost.index');
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
        $homePost = HomePost::find($id);
        return view('admin.homepost.edit', compact('homePost'));
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
        $homePost = HomePost::find($id);
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $homePost->title = $request->title;
        $homePost->body = $request->body;
        $homePost->save();
        Toastr::success('Data is updated successfully :)', 'Success');
        return redirect()->route('admin.homePost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homePost = HomePost::find($id);
        $homePost->delete();
        Toastr::success('Data is deleted successfully :)', 'Success');
        return redirect()->back();
    }
}
