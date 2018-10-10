<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $abouts = About::latest()->take(4)->get();
        return view('about', compact('abouts'));
    }

    public function aboutDetails($id)
    {
        $about = About::findOrFail($id);
        return view('aboutsDetails', compact('about'));
    }
}
