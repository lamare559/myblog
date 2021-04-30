@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @foreach ($myposts as $mypost)
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="card-title">{{$mypost->postname}}</h1>
                    <p>Category : {{$mypost->category}}</p>
                    <p>Posted on: {{$mypost->created_at}}</p>
                    <p>{{$mypost->articletext}}</p>
                    <a href="/home/update/{{$mypost->postslot}}" class="btn btn-success">Update Post</a>
                    <span>
                        <form action="{{route('deletes', $mypost->id)}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </span>
                </div>
            </div>
        @endforeach
    </div>
@endsection