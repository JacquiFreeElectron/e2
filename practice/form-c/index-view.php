<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>
</head>

<body>

    <form method='GET' action='process.php'>
        <h1>Mystery Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if(isset($result)) { ?>
    <h4>Results</h4>
    <?php if($correct) {?>
    correct!
    <?php } else {?>
    wrong!
    <?php } ?>
    <?php } ?>

</body>

</html>