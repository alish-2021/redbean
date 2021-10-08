<?php
include "db.php";

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];

$user = R::dispense('users'); // Подключение  к таблице

$user['name'] = $name; // 
$user['login'] = $login;
$user['email'] = $email;
R::store($user); // Сохранение в таблицу
?>
   <h2>Добавлен - <?= $name?></h2>
<?

?>