@extends('pages.lorem')

@section('data')
    <div class="container">
        @foreach (range(0,$count-1) as $i)
            <p>
                {{$ipsum[$i]}}
            </p>
        @endforeach
    </div>
@endsection
