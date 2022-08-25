@extends('layouts.app')

@section('title', ' - Register')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Register</h3>
                <hr>
                <form action="{{ route('register-user') }}" method="POST">
                    @if ($message=session()->get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if($message=session()->get('fail'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name"
                        value="{{ old('name')}}">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                      </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email"
                      value="{{ old('email')}}">
                      <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input data-toggle="password" type="password" class="form-control" name="password" id="password" placeholder="Password">
                      <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Register</button><br>
                  <a href="login">Already a member? Login now</a>
                  </form>
            </div>
        </div>
    </div>
@endsection