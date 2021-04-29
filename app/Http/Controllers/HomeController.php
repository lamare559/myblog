<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\User;

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
        $posts = Posts::orderBy('created_at', 'asc')->get();
        return view('home', ['posts' => $posts]);
    }

    // function to show all categories
    public function showCategories() 
    {
        $categories = Category::all();

        return view('categories', ['categories' => $categories]);
    }

    // function to show a specific post according to the postslot
    public function showPost($postslot) {
        $post = Posts::where('postslot', $postslot)->get();

        return view('post', ['post' => $post]);
    }
}