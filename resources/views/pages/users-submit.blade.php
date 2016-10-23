@extends('pages.users')

@section('data')
    <div class="container">
        <h3>Users:</h3>
        <ul>
            @foreach (range(0,$count-1) as $i)
                <li>{{$names[$i]}}
                    @if ($bdays)
                        <br> {{$bdays[$i]}}
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection
