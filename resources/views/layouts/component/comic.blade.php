@extends('layouts.app')

@section('content')
    <ol>
        @foreach($comics as $comic)
            <li>
                <ul>
                    <li>{{ $comic->Titolo }}</li>
                    <li>{{ $comic->Anno }}</li>
                    <li>{{ $comic->Recensione }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection