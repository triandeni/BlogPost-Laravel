@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-4"> {{  $post->title }} </h1>
            <p> By : <a href="/posts/author/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</p></a>
            @if ($post->image)
            <div style="max-height: 400px; overflow:hidden;">
          
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="card-img-top">
            </div>
            @else
            <img src="https://source.unsplash.com/150/?{{ $post->category->name }}" class="card-img-top" alt="img-fluid">
            @endif 
           <article class="my-3 fs-4">
            {!! $post->body !!}
           </article>
           <a href="/posts " class="text-decoration-none"> Kembali ke Postingan</a>

        </div>
    </div>
</div>
 

    
@endsection

