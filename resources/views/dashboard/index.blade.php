@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-8 text-center">
  <div class="main-body mt-3 text-center">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
      <h1 class="h2">Dashboard</h1>    
    </div>
    @if(session()->has('success'))
    <div class="alert alert-dark col-lg-9" role="alert">
     {{ session('success') }}
    </div>
        
    @endif
  

        <!-- /Breadcrumb -->
        <form>
        <div class="row gutters-sm ">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="250" height="400">
                  <div class="mt-3">
                    <h4 >{{ auth()->user()->name }}</h4>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          {{-- <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <p>{{ auth()->user()->username }}</p>    
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <p>{{ auth()->user()->email }}</p>  
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <p>{{ auth()->user()->phone }}</p> 
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <p>{{ auth()->user()->address }}</p> 
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Birth</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <p>{{ auth()->user()->birth }}</p> 
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">created at</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <p>{{ auth()->user()->created_at }}</p> 
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-12">
                    <a class="btn btn-info " target="__blank" href="/dashboard/edit">Edit</a>
                  </div>
                </div>
              </div>
            </div>   --}}
@endsection