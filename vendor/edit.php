<?php
include "db.php";
$id = $_GET['id'];

// $user = R::load('таблица', 'ключ (в данном случае id)') load - принимает таблицу и ключ
$user = R::load('users', $id);

?>

<form action="save.php" method="post">
   <input type="hidden" name="id" value="<?= $user['id']?>"> 
   <p>Name</p>
   <input type="text" name="name" value="<?= $user['name']?>">
   <p>Login</p>
   <input type="text" name="login" value="<?= $user['login']?>">
   <p>Email</p>
   <input type="text" name="email" value="<?= $user['email']?>">
   <br>
   <br>
   <br>
   <button type="submit">Edit post</button>
</form>

