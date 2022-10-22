<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jacqui's Project 2</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' href='/style.css'>
</head>

<body>
    <h1>Let's Play Rock, Paper, and Scissors!</h1>
    <p>You are going to play with your computer. Please choose your move : </p>
    <form method='POST' action='process.php'>
        <input type='radio' id='rock' name='choice' value='rock'
            <?php echo (!isset($choice) or $choice == 'rock') ? 'checked' : '' ?>>
        <label for='rock'><img src='/img/rock-svgrepo-com.svg' height=25px width=25px> rock </label>
        <input type='radio' id='paper' name='choice' value='paper'
            <?php echo (isset($choice) and $choice == 'paper') ? 'checked' : '' ?>>
        <lable for='paper'><img src='/img/paper-svgrepo-com.svg' height=25px width=25px> paper </lable>
        <input type='radio' id='scissors' name='choice' value='scissors'
            <?php echo (isset($choice) and $choice == 'scissors') ? 'checked' : '' ?>>
        <label for='scissors'><img src='/img/scissors-svgrepo-com.svg' height=25px width=25px> scissors</label>

        <button type='submit'>submit</button>
    </form>
    <?php if (isset($result)) { ?>

    <p id='computer'>The computer chose : <img src='/img/<?php echo $computer ?>-svgrepo-com.svg' height=25px
            width=25px>
        <?php echo $computer ?> </p>

    <div id='result'>
        <?php if ($isTie) { ?>
        <p>Tie! &#129308&#129307 </p>
        <?php } else if ($isWin) { ?>
        <p>You Won! &#128079</p>
        <?php } else { ?>
        <p>You Lost! &#128577</p>
        <?php } ?>
    </div>

    <?php } ?>
</body>

</html>