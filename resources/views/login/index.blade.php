@extends('layouts.main')

@section('container')
<body class="main-bg">
    <div class="login-container text-c animated flipInX">

        @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
            <div>
                <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
            </div>
                <h3 class="text-whitesmoke">Login</h3>
            <div class="container-content">
                <form class="margin-t" action="/login" method="post">
                    @csrf
                    <div class="form-group form-floating">
                        <input type="email" name="email" id="email" class="form-control mb-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="name@example.com" autofocus required>
                        <label for="email">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group form-floating">
                        <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password" required >
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="form-button button-l margin-b">Login</button>

                    <small class="text-white">don't have an account?  <a class="text-darkyellow ta-bold" href="/register"> Register</a></small>
                </form>
            </div>
        </div>
</body>
    
@endsection