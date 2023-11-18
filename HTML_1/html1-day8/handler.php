<h1>Запрос обработан</h1>
<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = strip_tags($_POST["email"]);
  $message = strip_tags($_POST["message"]);
  file_put_contents('orders.txt', "$email|$message|\n", FILE_APPEND);
 }
 echo "Спасибо за обращение";
?>