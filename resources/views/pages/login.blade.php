@extends('layouts.app')

@section('title', ' - Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Login</h3>
                <hr>
                <form action="{{ route('login-user') }}" method="POST" >
                  @if (Session::has('success'))
                  <div class="alert alert-success">
                      <p>{{ Session::get('success') }}</p>
                  </div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">
                      <p>{{ Session::get('fail') }}</p>
                  </div>
                  @endif
                  @csrf
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter email"
                      value="{{ old('email') }}">
                        <span class="text-danger">
                          @error('email')
                              {{ $message }}
                          @enderror
                        </span>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                      </span>

                    <br>
                    <button type="submit" class="btn btn-primary">Login</button><br>
                    <a href="register">Not a member yet? Register now</a><br>
                    <a href="">Forgot my password</a>
                  </form>
            </div>
        </div>
    </div>
@endsection