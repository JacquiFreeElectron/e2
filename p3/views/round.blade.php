@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2>Round Details</h2>
    <ul>
        <li>Round id: {{ $round['id'] }}</li>
        <li>Player's choice: {{ $round['choice'] }}</li>
        <li>Computer's choice: {{ $round['computer'] }}</li>
        <li>Results:
            @if ($round['tie'])
                <p>Tie</p>
            @endif

            @if ($round['win'])
                <p>You won</p>
            @endif

            @if (!($round['tie'] | $round['win']))
                <p>You lost</p>
            @endif

        </li>
    </ul>

    <a href='/history'>Back to Overall History</a>
@endsection
