@extends('layouts.app')

@section('content')
    @section('title', 'MyBlog - Categories')
    <div class="container">
        @foreach ($categories as $category)
            <div class="category card mb-2 p-3">
                <div class="card-body">
                    <p class="card-title">
                        {{$category->categoryname}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection