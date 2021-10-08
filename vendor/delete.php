<?php
include "db.php";

$name = $_GET['name']; // Получаю name
//$user = R::findOne('таблица','ключ в данном случае name = ?', [переменная с GET парметра])
$user = R::findOne('users','name = ?', [$name]); // Получаю
R::trash($user); //Удаление
header("Location: /");
?>
 