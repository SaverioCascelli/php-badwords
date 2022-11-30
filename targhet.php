<?php

$text = $_POST['paragraph'];
$word = $_POST['word'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targhet page</title>
</head>
<body>

    <h1>word: <?php  echo $word ?></h1>

    <p>
        text: <?php  echo $text?>
    </p>

    
</body>
</html>