@extends('layouts.app')

@section('style')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">
@endsection
@section('title', ' - Dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <h3>Dashboard - Welcome {{ $data->name}}</h3>
            <hr>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">{{ $data->id}}</th>
                    <td>{{ $data->name}}</td>
                    <td>{{ $data->email}}</td>
                    <td><a href="{{ 'logout' }}">logout</a></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
