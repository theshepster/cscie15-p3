@extends('layouts.master')

@section('lorem-active')
    class="active"
@endsection

@section('custom-head')
    <link href="{{ URL::asset('css/users.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="main">
            <h1>Apple Ipsum Generator</h1>
            <p class="lead">Generate some paragraphs.
                <br>It's like Epsom for your ipsum.</p>
        </div>
    </div>
    <div class="container" id="user-form" role="form">
        <form method="post" action="/lorem" data-pg-collapsed class="form-group">

            {{ csrf_field() }}

            <label class="control-label">Number of paragraphs
                <select class="form-control" data-pg-collapsed name="count">
                    @for($i = 1; $i < 100; $i++)
                        @if (old('count') == $i)
                            <option selected>
                        @else
                            <option>
                        @endif
                        {{$i}}</option>
                    @endfor
                </select>
            </label>
            <button type="submit" class="btn">Generate Ipsum</button>
        </form>

        @yield('errors')

    </div>

    @yield('data')

@endsection