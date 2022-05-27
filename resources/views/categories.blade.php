@extends('layouts.main')

@section('container')

<h1 class="mb-4 text-center">{{ $title }}</h1>


<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/categories">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit" >Search</button>
              </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
            <div class="card bg-dark text-white mb-3">
              @if ($category->image)
              <div style="max-height: 200px; overflow:hidden;">
            
                  <img src="{{ asset('storage/'. $category->image) }}" alt="{{ $category->name }}" class="card-img-top">
              </div>
              @else
              <img src="https://source.unsplash.com/300x300/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
              
              @endif
                
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-5" style="background-color: rgba(0,0,0,0.7)"> {{ $category->name }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection


