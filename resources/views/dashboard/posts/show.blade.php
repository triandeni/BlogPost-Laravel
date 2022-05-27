@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-4"> {{  $post->title }} </h1>
           
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning ">
                <span data-feather="edit">Edit</span> Edit </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn bg-danger" onclick="return confirm('are you sure?')">
                  <span data-feather="x-circle"></span>Delete</button>
                </form>

                @if ($post->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="card-img-top">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="img-fluid mt-3">
                @endif
           
           
           <article class="my-3 fs-4">
            {!! $post->body !!}
           </article>
           <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left">
               </span>Back to Post</a>

        </div>
    </div>
</div>
    
@endsection