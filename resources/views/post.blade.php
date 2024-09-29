
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By, <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden; ">
                        <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="">
                @endif
                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>
        
            <a href="/posts">Back To Blog</a>
        </div>
    </div>
</div>

    
    
@endsection



