<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Review;
use App\Welcome;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $postings = Post::all();
        return view('Pages.welcome', compact('postings'));
    }
   /* public function index1()
    {
        $postings = Post::all();
        return view('Pages.welcome', compact('postings'));
    }*/
}
