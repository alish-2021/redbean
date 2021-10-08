<?php
include "vendor/db.php"; // Подключение п
$users  = R::findAll('users'); // Вывод всех постов, FINDALL - отвечает за вывод всех постов с таблицы

?>

<form action="vendor/add.php" method="post">
   <p>Имя</p>
   <input type="text" name="name">
   <p>Логин</p>
   <input type="text" name="login">
   <p>Почта</p>
   <input type="text" name="email">
   <br>
   <br>
   <br>
   <button type="submit">Добавить</button>
</form>




<table>
   <tr>
      <td>id</td>
      <td>Имя</td>
      <td>Логин</td>
      <td>Почта</td>
      <td>Редактировать</td>
      <td>Удалить</td>
   </tr>
   <?php
      foreach($users as $user){
         ?>
         <tr>
            <td><?= $user['id']?></td>
            <td><?= $user['name']?></td>
            <td><?= $user['login']?></td>
            <td><?= $user['email']?></td>
            <td><a href="/vendor/edit.php?id=<?= $user['id']?>">edit</a></td> <!-- Здесь я ищу по ключу -> id-->
            <td><a href="/vendor/delete.php?name=<?= $user['name']?>">delete</a></td><!-- Здесь я ищу по ключу -> name-->
         </tr>
         <?
      }
   ?>
</table>