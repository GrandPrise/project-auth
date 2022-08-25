@extends('layouts.app')

@section('title', ' - Register')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Register</h3>
                <hr>
                <form action="{{ route('register-user') }}" method="POST">
                   <x-session-status/>
                   <x-validation-errors :errors='$errors'/>
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name"
                        value="{{ old('name')}}">
                      </div>
                    <x-input-email/>
                    <x-input-password/>
                    <x-submit/>
                  <a href="login">Already a member? Login now</a>
                  </form>
            </div>
        </div>
    </div>
@endsection