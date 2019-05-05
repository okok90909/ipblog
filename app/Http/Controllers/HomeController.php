<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
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
        $url        = "https://api.tenor.co/v1/search?tag=blog&key=UWYTUR8PJ0LD";
        $content    = file_get_contents($url);
        $json       = json_decode($content, true)['results'][0]['media'][0]['webm']['preview'];
        return view('home', compact('json'));
    }
}
