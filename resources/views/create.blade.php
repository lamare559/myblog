@extends('layouts.app')

@section('content')
    @section('title', 'MyBlog - Create a new post')
    <div class="container">
        <div class="card col-md-5 mx-auto d-block">
            <h2 class="card-title text-center py-2">Create an article</h2>
            <form action="/home" method="post">
                @csrf
                <div class="form-group">
                    <label for="postname">Post Name:</label>
                    <input type="text" class="form-control" name="postname" placeholder="Enter a name for your post">
                    @error('postname')
                        <span class="error-message text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="postslot">Post Slot:</label>
                    <input type="text" class="form-control" name="postslot" placeholder="e.g postname-one">
                    @error('postslot')
                        <span class="error-message text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select name="category" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->categoryname}}">{{$category->categoryname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="articletext">Text:</label>
                    <textarea name="articletext" id="articletext" class="form-control" placeholder="Write something about your article"></textarea>
                    @error('articletext')
                        <span class="error-message text-danger">{{$message}}</span>
                    @enderror
                </div>
                <input type="submit" value="Post" class="btn btn-primary btn-block mb-4">
            </form>
        </div>
    </div>
@endsection