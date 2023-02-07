<?php

  session_start();

  // if (isset($_SESSION['user_id'])) {
  //   header('Location: /php-login');
  // }
  require 'conexion.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $con->prepare('SELECT tipo , nombre ,apellido, email, pas FROM users WHERE email-login = email');
    $records->bindParam('email', $_POST['email-login']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['pass-login'], $results['pas'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /login.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>