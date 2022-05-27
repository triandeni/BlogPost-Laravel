@extends('layouts.main')

@section('container')
<body class="main-bg">
    <div class="login-container text-c animated flipInX">
            <div>
                <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
            </div>
                <h3 class="text-whitesmoke">Registration</h3>
            <div class="container-content" >
                <form class="margin-t" action="/register" method="post">
                    @csrf
                    <div class="form-group form-floating">
                        <input type="text" name="name" id="name" class="form-control mb-1 @error('name') is-invalid @enderror" placeholder="name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group form-floating">
                        <input type="text" name="username" id="username" class="form-control mt-2 @error('username') is-invalid @enderror" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">UserName</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
            
                    <div class="form-group form-floating">
                        <input type="email" name="email" id="email" class="form-control mt-2 @error('email') is-invalid @enderror" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group form-floating">
                        <input type="password" name="password" id="password" class="form-control mt-2 @error('password') is-invalid @enderror" placeholder="Password" required value="{{ old('password') }}">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="form-button button-l margin-b mt-3">Register</button>

                    <small class="text-white">already have an account <a class="text-darkyellow" href="/login"> Login</a></small>
                </form>
            </div>
        </div>
</body>
    
@endsection