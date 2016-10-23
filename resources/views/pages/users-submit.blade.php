@extends('pages.users')

@section('data')
    <div class="container">
        <h3>Users:</h3>
        <ul>
            @foreach ($names as $name)
                <li>{{$name}}</li>
            @endforeach
        </ul>
    </div>
@endsection
