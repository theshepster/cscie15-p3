@extends('layouts.master')

@section('custom-head')
    <link href="{{ URL::asset('css/users.css') }}" rel="stylesheet">
@endsection

@section('users-active')
    class="active"
@endsection

@section('content')
    <div class="container">
        <div class="main" id="userimage">
            <div class ="caption">
                <h1>User Generator</h1>
                <p class="lead">Use the form below to generate some fake users.
                <br>Try it. It'll be fun.</p>
            </div>
        </div>
    </div>
    <div class="container" id="form" role="form">
        <form method="post" action="/users" data-pg-collapsed class="form-group">

            {{ csrf_field() }}

            <label class="control-label">Number of users to generate
                <select class="form-control" data-pg-collapsed name="count">
                    @for($i = 1; $i < 100; $i++)
                        @if (old('count') == $i || $count == $i)
                            <option selected>
                        @else
                            <option>
                        @endif
                        {{$i}}</option>
                    @endfor
                </select>
            </label>
            <div class="checkbox">
                <label class="control-label crsa-selected">
                    <input type="checkbox" name="birthday" @if ($bdays != 0) {{"checked"}} @endif >Include Birthday
                </label>
            </div>
            <button type="submit" class="btn-lg btn-primary">Generate Users</button>
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
