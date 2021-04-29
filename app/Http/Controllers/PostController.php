<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PostController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('create', ['categories' => $categories]);
    }
}