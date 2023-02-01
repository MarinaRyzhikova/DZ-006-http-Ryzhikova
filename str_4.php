<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Четвертая страница</title>
</head>
<body>
<h1>Четвертая</h1>
<?php
session_start();
echo "Третья страница была открыта - " .  $_SESSION['number_of_sessions_id'] . " раз" . "<br>";

?>
</body>
</html>