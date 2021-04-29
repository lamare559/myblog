@extends('layouts.app')


@section('content')
    @section('title', 'MyBlog')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="content">
                <div class="title m-b-md text-center">
                    Welcome to MYBLOG a blogpost system where you can post article of different categories
                    <div>
                        <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register Now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
