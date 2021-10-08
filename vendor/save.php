<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];

// $user = R::load('таблица', 'ключ которую я передал это id') Я использую LOAD потому что я передаю id ключ,
// если передаваемый ключ например -> name тогда я использоваю FINDONE
$user = R::load('users', $id);

$user['id'] = $id;
$user['name'] = $name; // Присваиваю    
$user['login'] = $login;
$user['email'] = $email;

R::store($user); //Сохранение
header('Location: edit.php?id =' .$id)
?>