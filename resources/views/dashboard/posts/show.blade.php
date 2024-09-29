@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row  my-3">
        <div class="col-lg-8">
            
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success "> <span data-feather="arrow-left" class="align-text-bottom"></span> Back to all my Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit" class="align-text-bottom"></span> Edit</a>

                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle" class="align-text-bottom"></span>Delete
                        </button>
                    </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden; ">
                        <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid mt-3" alt="">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="">
                @endif
                    
                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>
        
            <a href="/posts">Back To Blog</a>
        </div>
    </div>
</div>
@endsection