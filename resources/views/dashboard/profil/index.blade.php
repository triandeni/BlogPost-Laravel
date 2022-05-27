@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-8">
  <div class="main-body mt-3">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
      <h1 class="h2">Profile</h1>    
    </div>
    @if(session()->has('success'))
    <div class="alert alert-dark col-lg-9" role="alert">
     {{ session('success') }}
    </div>
        
    @endif
  

        <!-- /Breadcrumb -->
        <form>
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <p>create at : {{ auth()->user()->created_at->format('Y-m-d') }}</p>
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="100" height="180">
                  <div class="mt-3">
                    <h4 >{{ auth()->user()->name }}</h4>
                      <ul class="list-group list-group-flush">
                       
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></h6>
                          <span class="text-secondary">@triandeni</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></h6>
                          <span class="text-secondary">trian_deni</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></h6>
                          <span class="text-secondary">trian.deni</span>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
       
          </div>
          
          <div class="col-md-8">
           
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">username</h6>
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
                      <h6 class="mb-0">About Me</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <p>{{ auth()->user()->about }}</p> 
                    </div>
                
                    <a href="/dashboard/profil/{{ $users }}/edit" class="btn btn-primary mt-2">edit</a>
                  </div>
                </div>
              </div>
            </div>  
          </div>
    
@endsection