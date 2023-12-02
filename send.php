<?php

  $name= $_POST['name'];
  $email= $_POST['email'];
  $comment= $_POST['comment'];

  $name = htmlspecialchars($name);
  $email = htmlspecialchars($email);
  $comment = htmlspecialchars($comment);

  $name = urldecode($name);
  $email = urldecode($email);
  $comment = urldecode($comment);

  $name = trim($name);
  $email = trim($email);
  $comment = trim($comment);

  if (mail("alexandrserg.job@gmail.com", 
    "Новое письмо с сайта Maining",
    "Имя: ".$login."\n".
    "Почта: ".$email."\n".
    "Комментарий: ".$comment,
    "From: no-reply@mydomain.ru \r\n")
    ) {
      echo ('Письмо успешно отправлено!');
    }
    else 
    {
      echo ('Есть ошибки! Проверьте данные...');
    }

?>