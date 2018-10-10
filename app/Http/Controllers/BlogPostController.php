<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Contact;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        $blogPosts = BlogPost::latest()->paginate(4);
        $oneLatestPost = BlogPost::latest()->take(1)->get();
        $randomPost = BlogPost::take(5)->inRandomOrder()->get();
        return view('blog', compact('contact', 'blogPosts', 'oneLatestPost', 'randomPost'));
    }

    public function detailsPost($id)
    {
        $contact = Contact::all();
        $blogPosts = BlogPost::latest()->take(10)->get();
        $blogPostsDetails = BlogPost::findOrFail($id);
        return view('detailsBlogPost', compact('blogPosts', 'blogPostsDetails', 'contact'));
    }
}
