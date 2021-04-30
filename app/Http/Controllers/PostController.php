<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Posts;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('create', ['categories' => $categories]);
    }

    // function to store post inside the database
    public function storePost(Request  $request) {

    

       // dd(Auth::user());
        

        // Setting validation rules
        $request->validate([
            'postname' => 'required',
            'postslot' => 'required',
            'articletext' => 'required'
        ], [
            'postname.required' => 'Post Name must not be empty!!',
            'postslot.required' => 'Post slot must not be empty!!',
            'articletext.required' => 'Text must not be empty!!',
        ]);
        
        $post = new Posts();

        $post->postname = request('postname');
        $post->postslot = request('postslot');
        $post->category = request('category');
        $post->articletext = request('articletext');
        $post->postedby = Auth::user()->name;
        

        $post->save();

        return redirect('/home')->with('success', 'Post successfully added!!');
    }

    public function update($postslot) {
        $posts = Posts::firstWhere('postslot', $postslot);
        return view('update', ['posts' => $posts, 'postslot' => $postslot]);
    }

    public function edit(Request $request, $postslot) {

        $posts = Posts::firstWhere('postslot', $postslot);
        $posts->update([
            'postname' => request('postname'),
            'articletext' => request('articletext')
        ]);

        return redirect('/home/myposts')->with('success', 'Post successfully updated!!');
    }

    public function delete($id) {
        $post = Posts::firstWhere('id', $id);
        $post->delete();

        return redirect('/home/myposts')->with('success', 'Post successfully deleted!!');
    }
}