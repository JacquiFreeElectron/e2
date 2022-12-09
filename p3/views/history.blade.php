@extends('templates/master')

@section('title')
    Game History
@endsection

@section('content')
    <ul>
        @foreach ($rounds as $round)
            <li><a href='/round?id={{ $round['id'] }}'>Round {{ $round['id'] }}</a></li>
        @endforeach
    </ul>
    <a href='/'>Back to Homepage</a>
@endsection
