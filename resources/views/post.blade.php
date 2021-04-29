@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{$post->postname}}</h2>
        <p>Posted by: {{$post->postedby}}</p>
        <p>Posted on: {{$post->created_at}}</p>
        <p>{{$post->articletext}}</p>
    </div>
@endsection