@extends('layouts.app')

@section('content')
@section('title', 'MyBlog - Create a new post')
    <div class="container">
        <div class="card col-md-5 mx-auto d-block">
            <h2 class="card-title text-center py-2">Update article</h2>
            <form action="{{ route('update', ['postslot' => $postslot]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="postname">Post Name:</label>
                    <input type="text" class="form-control" name="postname" placeholder="Enter a name for your post" value="{{$posts->postname}}">
                </div>
                <div class="form-group">
                    <label for="articletext">Text:</label>
                    <textarea name="articletext" id="articletext" class="form-control" placeholder="Write something about your article">{{$posts->articletext}}</textarea>
                </div>
                <input type="submit" value="Update" class="btn btn-primary btn-block mb-4">
            </form>
        </div>
    </div>
@endsection