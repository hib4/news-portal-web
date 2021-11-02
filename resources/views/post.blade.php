@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title }}</h1>
                <p>By. <a style="text-decoration:none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a style="text-decoration:none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a style="text-decoration:none" href="/blog" class="d-block mt-5">Back to Posts</a>
            </div>
        </div>
    </div>
    
@endsection
