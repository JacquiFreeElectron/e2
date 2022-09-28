<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jacqui's Project 1</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>Mechanics</h1>
    <ul>
        <li>Player A and Player B randomly throw either Rock, Paper or Scissors.</li>
        <li>Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
        <li>If Player A and Player B threw the same move, the result is a tie.</li>
    </ul>

    <h1>Results</h1>
    <?php foreach($results as $value){ ?>
    <ul>
        <li>Player A threw: <?php echo $value['playerA']?></li>
        <li>PLayer B threw: <?php echo $value['playerB']?></li>
        <li><?php echo $value['result'] ?></li>
    </ul>

    <?php } ?>


</body>

</html>