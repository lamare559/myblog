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
        </div>
    </div>
    <div class="wrapper">
        @foreach ($posts as $post)
            @if ($post)
                <div class="card">
                    <p>{{$post->postname}}</p>
                </div>
            @else
                <p>Not posts found!!!</p>
            @endif
        @endforeach
    </div>
</div>
@endsection
