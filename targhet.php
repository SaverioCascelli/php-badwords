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

    <h3>Il paragrafo:</h3>
    <p>
        <?php  echo $text?>
    </p>
    <h4>ha <?php echo strlen($text)?> caratteri</h4>
    

    <h3>Il paragrafo censurato con la parola <?php echo $word ?>:</h3>
    <p>
        <?php  echo str_replace($word,'***', $text); ?>
    </p>
</body>
</html>