@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Profil</h1>    
  </div>

  <div class="col-lg-8">
  <form method="post" action="/dashboard/profil/{{ $user }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" 
      name="name" required autofocus value="{{ old('name', auth()->user()->name) }}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
      <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error ('slug') is-invalid @enderror" id="slug" 
      name="slug" value="{{ old('slug', auth()->user()->slug) }}" readonly required >
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control @error ('username') is-invalid @enderror" id="usernmae" 
      name="username" value="{{ old('username', auth()->user()->username) }}"  required >
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
  
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" 
      name="email" value="{{ old('email', auth()->user()->email) }}"  required >
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="number" class="form-control @error ('phone') is-invalid @enderror" id="phone" 
      name="phone" value="{{ old('phone', auth()->user()->phone) }}"  required >
      @error('phone')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control @error ('address') is-invalid @enderror" id="address" 
      name="address" value="{{ old('address', auth()->user()->address) }}"  required >
      @error('address')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="birth" class="form-label">Birth</label>
      <input type="date" class="form-control @error ('birth') is-invalid @enderror" id="birth" 
      name="birth" value="{{ old('birth', auth()->user()->birth) }}"  required >
      @error('birth')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="about" class="form-label">About Me</label>
      
      <input id="about" type="hidden" name="about" value="{{ old('about', auth()->user()->about) }}">
      <trix-editor input="about"></trix-editor>
      @error('about')
      <p class="text-danger">  {{ $message }} </p>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
  </form>
</div>

<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('keyup', function() {
    fetch('/dashboard/profil/checkSlug?name= ' + name.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
  </script>

@endsection