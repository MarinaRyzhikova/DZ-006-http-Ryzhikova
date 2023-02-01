
<?php
session_start();

$_SESSION['count'] = isset($_SESSION['count'])?
    ++$_SESSION['count'] :0;
$number_of_sessions =  $_SESSION['count'];
if ($number_of_sessions%3 === 0){
    header('Location: /str_4.php');
    exit;
}

$_SESSION['number_of_sessions_id'] = $_SESSION['count'];

echo "Вы загрузили страницу " .  $_SESSION['number_of_sessions_id']  . " раз" . "<br>";


?>

