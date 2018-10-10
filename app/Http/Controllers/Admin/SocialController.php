<?php

namespace App\Http\Controllers\Admin;

use App\Social;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::all();
        return view('admin.social.index', compact('socials'));
    }

    public function update(Request $request, $id)
    {
        $social = Social::findOrFail($id);
        $this->validate($request, [
           'facebook' => 'required',
           'twitter' => 'required',
           'youtube' => 'required',
           'linkedin' => 'required',
        ]);

        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->youtube = $request->youtube;
        $social->linkedin = $request->linkedin;
        $social->save();
        Toastr::success('Data saved successfully :)', 'Success');
        return redirect()->back();
    }
}
