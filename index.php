<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first page</title>
</head>
<body>
    <?php
        $paragaph = '';
        $word = '';
    ?>

    <form action="./targhet.php" method="POST">
        <input type="text" name="paragraph" placeholder="paragraph">
        <input type="text" name="word" placeholder="word">
        <button type="submit">send</button>
    </form>
</body>
</html>