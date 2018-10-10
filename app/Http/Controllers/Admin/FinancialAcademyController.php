<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\FinancialAcademy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class FinancialAcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financialacademies = FinancialAcademy::latest()->get();
        return view('admin.financialacademy.index', compact('financialacademies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.financialacademy.create');
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

            if (!Storage::disk('public')->exists('financialacademy')){
                Storage::disk('public')->makeDirectory('financialacademy');
            }
            $postResize = Image::make($image)->resize(373,77)->stream();
            Storage::disk('public')->put('financialacademy/'.$imageName, $postResize);
        }else{
            $imageName = 'post.png';
        }

        $blogPost = new FinancialAcademy();
        $blogPost->user_id = Auth::id();
        $blogPost->title = $request->title;
        $blogPost->image = $imageName;
        $blogPost->body = $request->body;
        $blogPost->save();
        Toastr::success('financial academy info successfully saved', 'Success');
        return redirect()->route('admin.financialAcademy.index');
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
        $financialacademy = FinancialAcademy::findOrFail($id);
        return view('admin.financialacademy.edit', compact('financialacademy'));
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
        $financialacademy = FinancialAcademy::findOrFail($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image)){
            $currantDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currantDate.'-'.uniqid().'.'.$image->getclientoriginalextension();

            if (!Storage::disk('public')->exists('financialacademy/'.$financialacademy->image)){
                Storage::disk('public')->makeDirectory('financialacademy/'.$financialacademy->image);
            }
            if (Storage::disk('public')->exists('financialacademy/'.$financialacademy->image)){
                Storage::disk('public')->delete('financialacademy/'.$financialacademy->image);
            }
            $postResize = Image::make($image)->resize(373,77)->stream();
            Storage::disk('public')->put('financialacademy/'.$imageName, $postResize);
        }else{
            $imageName = $financialacademy->image;
        }

        $financialacademy->user_id = Auth::id();
        $financialacademy->title = $request->title;
        $financialacademy->image = $imageName;
        $financialacademy->body = $request->body;
        $financialacademy->save();
        Toastr::success('Financial academy info successfully updated', 'Success');
        return redirect()->route('admin.financialAcademy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financialacademy = FinancialAcademy::findOrFail($id);
        if (Storage::disk('public')->exists('financialacademy/'.$financialacademy->image)){
            Storage::disk('public')->delete('financialacademy/'.$financialacademy->image);
        }
        $financialacademy->delete();
        Toastr::success('financial academy info successfully deleted', 'Success');
        return redirect()->back();
    }
}
