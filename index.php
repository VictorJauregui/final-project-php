<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /final-project');
  }
  require 'conexion.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="full-screen">
        <div class="left-part">
            <img class="img-logo" src="img/logo.png" alt="logo grifindor">
            <div class="form-to-access" id="login-form">
                <div class="all-btn">
                    <div id="teacher-btn">
                        <p class="t">I´m  Teacher </p>
                    </div>
                    
                    <div id="wizard-btn">
                        <p class="p">Future wizard</p>

                    </div>

                </div>
                <form action="login.php" method = POST class="form-login">
                    <div class=div--center>
                        <label >
                            User <br>
                            <input class="input--large" type="text">
                            <br>
                            <br>
                        </label>
                        <label > 
                            Passwords <br>
                            <input class="input--large" type="password">
                            <br><br>
                            
                        </label>
                        <br>
                        <button class="bttn">Log in</button><br>

                    </div>
                </form>
                <div class="p-of-register">
                    <p>Are you not register yet?<p class="click__here--btnn" id="change-to-next-form">Click Here</p></p>

                </div>

            </div>

            <div class="form-registeder-to-griffindor"id="hidden2">
                <form action="tabla.php" method="POST"  class="form-2nd">
                    <div class="checkbox-position">
                        <label >
                            <input  type="radio" class="radio-check" name="for__select--one" value="Teacher">Teacher
                        </label>
                        <label >
                            <input type="radio" class="radio-check" name="for__select--one" value="Future-wizard">Future wizard
                        </label>

                    </div>
                    <br>
                    <div class="second-form--partial">
                        <label>Name*<br>
                            <input type="text" class="input--large-1" name="name"><br>
                        </label>
                        <label>Last Name*<br>
                            <input type="text" class="input--large-1" name="last-name"><br>

                        </label>
                        <label>Email*<br>
                            <input type="text" class="input--large-1" name="email"><br>

                        </label>
                        <label>Password*<br>
                            <input type="password" class="input--large-1 pass-of-register" name="pass" minlenght=5><br>
                                <small>error</small>
                        </label>
                        <button type="submit" class="bttn-create-account" name="register-btn">Create  account</button>

                    
                    </div>
                </form>

            </div>
        </div>
        <div class="right-part">
            <img class="side-img"src="img/grifndor.png" alt="">

        </div>


    </div>
</body>
</html>