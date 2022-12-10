@extends('templates/master')

@section('title')
    Rock, Paper, and Scissors
@endsection

@section('content')
    <h2>Let's Play Rock, Paper, and Scissors!</h2>
    <p>You are going to play with your computer. Please choose your move : </p>
    <form method='POST' action="/process">
        <input type='radio' id='rock' name='choice' value='rock' @if ($choice == 'rock') checked @endif>
        <label for='rock'><img src='/images/rock-svgrepo-com.svg' height=25px width=25px> rock </label>
        <input type='radio' id='paper' name='choice' value='paper' @if ($choice == 'paper') checked @endif>
        <label for='paper'><img src='/images/paper-svgrepo-com.svg' height=25px width=25px> paper </label>
        <input type='radio' id='scissors' name='choice' value='scissors'
            @if ($choice == 'scissors') checked @endif>
        <label for='scissors'><img src='/images/scissors-svgrepo-com.svg' height=25px width=25px> scissors</label>

        <button type='submit'>submit</button>
    </form>
    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a href="/history">History</a>

    @if ($choice)
        <p id='computer'>The computer chose : <img src='/images/{{ $computer }}-svgrepo-com.svg' height=25px
                width=25px>
            {{ $computer }}. You chose : <img src='/images/{{ $choice }}-svgrepo-com.svg' height=25px width=25px>
            {{ $choice }}</p>

        @if ($tie)
            <p>Tie! &#129308&#129307</p>
        @endif

        @if ($win)
            <p>You Win! &#128079</p>
        @endif

        @if (!($tie | $win))
            <p>You Lose! &#128577</p>
        @endif
    @endif
@endsection
