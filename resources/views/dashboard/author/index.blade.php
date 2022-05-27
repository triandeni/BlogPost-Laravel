@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">my posts</h1>    
  </div>
  @if(session()->has('success'))
  <div class="alert alert-dark col-lg-9" role="alert">
   {{ session('success') }}
  </div>
      
  @endif
  <div class="table-responsive col-lg-10">
   
    <table class="table table-striped table-sm ">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">username</th>
          <th scope="col">email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)    
        <tr>
          <td>{{  $loop->iteration }}</td>
          <td>{{ $user->username }}</td>
          <td class="col-3">{{ $user->email }}</td>
          <td class="col-2">
            <a href="/dashboard/author/{{ $user->slug }}" class="badge bg-info text-decoration-none"><span data-feather="eye">detail</span></a>
            
            <form action="/dashboard/author/" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')">
                <span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection