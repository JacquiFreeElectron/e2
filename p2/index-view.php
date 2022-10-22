<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jacqui's Project 2</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>Let's Play Rock, Paper, and Scissors!</h1>
    <p>You are going to play with your computer. This is a best of three game. Please choose your move for round
        <?php echo ('1')?></p>
    <form method='POST' action='process.php'>
        <input type='radio' id='rock' name='choice' value='rock' checked>
        <label for='rock'>rock</label>
        <input type='radio' id='paper' name='choice' value='paper'>
        <lable for='paper'>paper</lable>
        <input type='radio' id='scissors' name='choice' value='scissors'>
        <label for='scissors'>scissors</label>

        <button type='submit'>submit</button>
    </form>






</body>

</html>