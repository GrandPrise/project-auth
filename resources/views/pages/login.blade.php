@extends('layouts.app')

@section('title', ' - Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Login</h3>
                <hr>
                <x-validation-errors :errors='$errors'/>
                <form action="{{ route('login-user') }}" method="POST" >
                 <x-session-status />
                  @csrf
                    <x-.input-email/>
                    <x-input-password/>
                    <x-submit/><br>
                    <a href="register">Not a member yet? Register now</a><br>
                    <a href="">Forgot my password</a>
                  </form>
            </div>
        </div>
    </div>
@endsection