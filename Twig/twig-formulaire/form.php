<?php

// http://localhost:8000/form.php?login=foo&email=foo@example.com&...

echo '<pre>';
var_dump($_POST);
echo '</pre>';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input name="login" type="text">
        <button type="submit">ok</button>
    </form>
</body>
</html>