<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\financialPlanning;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class financialPlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financialplannings = financialPlanning::latest()->get();
        return view('admin.financialplanning.index', compact('financialplannings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.financialplanning.create');
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

            if (!Storage::disk('public')->exists('financialplanning')){
                Storage::disk('public')->makeDirectory('financialplanning');
            }
            $postResize = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('financialplanning/'.$imageName, $postResize);
        }else{
            $imageName = 'post.png';
        }

        $financialplanning = new financialPlanning();
        $financialplanning->user_id = Auth::id();
        $financialplanning->title = $request->title;
        $financialplanning->image = $imageName;
        $financialplanning->body = $request->body;
        $financialplanning->save();
        Toastr::success('financial planning info successfully saved', 'Success');
        return redirect()->route('admin.financialplanning.index');
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
       $financialplanning = financialPlanning::findOrFail($id);
        return view('admin.financialplanning.edit', compact('financialplanning'));
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
        $financialplanning = financialPlanning::findOrFail($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image)){
            $currantDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currantDate.'-'.uniqid().'.'.$image->getclientoriginalextension();

            if (!Storage::disk('public')->exists('financialplanning/'.$financialplanning->image)){
                Storage::disk('public')->makeDirectory('financialplanning/'.$financialplanning->image);
            }
            if (Storage::disk('public')->exists('financialplanning/'.$financialplanning->image)){
                Storage::disk('public')->delete('financialplanning/'.$financialplanning->image);
            }
            $postResize = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('financialplanning/'.$imageName, $postResize);
        }else{
            $imageName = $financialplanning->image;
        }

        $financialplanning->user_id = Auth::id();
        $financialplanning->title = $request->title;
        $financialplanning->image = $imageName;
        $financialplanning->body = $request->body;
        $financialplanning->save();
        Toastr::success('Financial planning info successfully updated', 'Success');
        return redirect()->route('admin.financialplanning.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financialplanning = financialPlanning::findOrFail($id);
        if (Storage::disk('public')->exists('financialplanning/'.$financialplanning->image)){
            Storage::disk('public')->delete('financialplanning/'.$financialplanning->image);
        }
        $financialplanning->delete();
        Toastr::success('financial planning info successfully deleted', 'Success');
        return redirect()->back();
    }
}
