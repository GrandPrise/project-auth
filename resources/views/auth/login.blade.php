@extends('layouts.app')

@section('title', ' - Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Login</h3>
                <hr>
                <form>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <br>
                    {{-- <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Login</button><br>
                    <a href="register">Not a member yet? Register now</a><br>
                    <a href="">Forgot my password</a>
                  </form>
            </div>
        </div>
    </div>
@endsection