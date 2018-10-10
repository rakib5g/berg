<?php

namespace App\Http\Controllers;

use App\Contact;
use App\HomePost;
use App\HomeVideo;
use App\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        $homePosts = HomePost::latest()->take(3)->get();
        $videos = HomeVideo::all();
        return view('welcome', compact('videos','homePosts', 'contacts'));
    }

    public function homePostDetails($id)
    {
        $homepost = HomePost::findOrFail($id);
        return view('homePostDetails', compact('homepost'));
    }


}
