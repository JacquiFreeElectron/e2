@extends('templates/master')

@section('title')
    Rock, Paper, and Scissors
@endsection

@section('content')
    <h2>Let's Play Rock, Paper, and Scissors!</h2>
    <p>You are going to play with your computer. Please choose your move : </p>
    <form method='POST' action='/process'>
        <input type='radio' id='rock' name='choice' value='rock'>

        <label for='rock'><img src='/images/rock-svgrepo-com.svg' height=25px width=25px> rock </label>
        <input type='radio' id='paper' name='choice' value='paper'>
        <label for='paper'><img src='/images/paper-svgrepo-com.svg' height=25px width=25px> paper </label>
        <input type='radio' id='scissors' name='choice' value='scissors'>
        <label for='scissors'><img src='/images/scissors-svgrepo-com.svg' height=25px width=25px> scissors</label>

        <button type='submit'>submit</button>
    </form>
@endsection
