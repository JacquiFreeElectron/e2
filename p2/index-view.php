<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jacqui's Project 2</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>Let's Play Rock, Paper, and Scissors!</h1>
    <p>You are going to play with your computer. Please choose your move : </p>
    <form method='POST' action='process.php'>
        <input type='radio' id='rock' name='choice' value='rock'
            <?php echo (!isset($choice) or $choice == 'rock') ? 'checked' : '' ?>>
        <label for='rock'>rock</label>
        <input type='radio' id='paper' name='choice' value='paper'
            <?php echo (isset($choice) and $choice == 'paper') ? 'checked' : '' ?>>
        <lable for='paper'>paper</lable>
        <input type='radio' id='scissors' name='choice' value='scissors'
            <?php echo (isset($choice) and $choice == 'scissors') ? 'checked' : '' ?>>
        <label for='scissors'>scissors</label>

        <button type='submit'>submit</button>
    </form>
    <?php if (isset($result)) { ?>

    <p>The computer chose : <?php echo $computer ?>

        <?php if ($isTie) { ?>
    <p>Tie!</p>
    <?php } else if ($isWin) { ?>
    <p>You Won!</p>
    <?php } else { ?>
    <p>You Lost!</p>
    <?php } ?>

    <?php } ?>
</body>

</html>