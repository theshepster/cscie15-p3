@extends('layouts.master')

@section('custom-head')
    <link href="{{ URL::asset('css/users.css') }}" rel="stylesheet">
@endsection

@section('users-active')
    class="active"
@endsection

@section('content')
    <div class="container">
        <div class="main">
            <h1>User Generator</h1>
            <p class="lead">Use the form below to generate some fake users.
            <br>Try it. It'll be fun.</p>
        </div>
    </div>
    <div class="container" id="user-form" role="form">
        <form method="post" action="/users" data-pg-collapsed class="form-group">

            {{ csrf_field() }}

            <label class="control-label">Number of users to generate
                <select class="form-control" data-pg-collapsed name="count">
                    @for($i = 1; $i < 100; $i++)
                        <option>{{$i}}</option>
                    @endfor
                </select>
            </label>
            <div class="checkbox">
                <label class="control-label crsa-selected">
                    <input type="checkbox" name="birthday">Include Birthday
                </label>
                <br>
                <label class="control-label crsa-selected">
                    <input type="checkbox" name="profile"}}>Include Profile
                </label>
            </div>
            <button type="submit" class="btn">Generate Users</button>
        </form>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                Error!
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

    @yield('data')

@endsection
