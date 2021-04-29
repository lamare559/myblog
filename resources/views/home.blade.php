@extends('layouts.app')

@section('content')
@section('title', 'MyBlog - Home')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                @if (Auth::user())
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                @endif
                <strong>Welcome to your account</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <div class="wrapper">
        @foreach ($posts as $post)
            @if ($post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">{{$post->postname}}</h2>
                        <p class="card-title">Category : {{$post->category}}</p>
                        <p>Posted by : {{$post->postedby}}</p>
                        <p>Posted on : {{$post->created_at}}</p>
                        <p>{{substr($post->articletext, 0, 200).".........."}}</p>
                        <a href="/home/{{$post->postslot}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            @else
                <p>Not posts found!!!</p>
            @endif
        @endforeach
    </div>
</div>
@endsection
