<?php

namespace App\Http\Controllers\Admin;

use App\HomeVideo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomevideoController extends Controller
{
    public function index()
    {
        $homeVideos = HomeVideo::all();
        return view('admin.homevideo.index', compact('homeVideos'));
    }

    public function update(Request $request, $id)
    {
        $homeVideo = HomeVideo::findOrFail($id);
        $this->validate($request, [
            'link' => 'required',
        ]);

        $homeVideo->link = $request->link;
        $homeVideo->save();
        Toastr::success('Data saved successfully :)', 'Success');
        return redirect()->back();
    }
}
