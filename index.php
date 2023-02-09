<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&family=Inria+Serif:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <title></title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="Javascript/script.js" defer></script>
</head>
<body>
    <div class="full-screen">
        <div class="left-part">
        <?php if(isset($_GET["sorry"])){
                        echo "<div class='sorry'>
                        <img class='img-error' src='assets/img-error.png'>
                        <p>
                        Sorry, the registration was not completed because you forgot to fill in all the fields. Please try again</p>
                        </div>";}?>
            
            <?php if(isset($_GET["register"])){
                        echo "<div class='correct'>
                        <img class='img-correct' src='assets/img-correct.png'>
                        <p>
                        Congratulations. Your Wizard register has been succesfully. Please try to enter now</p>
                        </div>";}?>
            <img class="img-logo" src="assets/logo.png" alt="logo grifindor">
            <div class="form-to-access" id="login-form">
                <div class="all-btn">
                    <div id="teacher-btn">
                        <p class="t">I´m  Teacher </p>
                    </div>
                    
                    <div id="wizard-btn">
                        <p class="p">Future wizard</p>

                    </div>

                </div>
                <form action="login.php" method="POST" class="form-login">
                    <div class=div--center>
                        <label class="user-label">
                            User <br>
                            <input class="input--large email-login" type="text" name="email" placeholder="yourWizardEmail@gmail.com">
                            <br>
                            <br>
                        </label>
                        <label > 
                            Passwords <br>
                            <input class="input--large pass-login" type="password" name="password" placeholder="****">
                            <br><br>
                            
                        </label>
                        <?php if(isset($_GET["error"])){
                        echo "<div class='error'>
                        <p>Prueba de nuevo. Tu varita parece no tener poderes para acceder.. </p>
                        </div>";
                    }
                    ?>
                        <br>
                        <button class="bttn btn-login">Log in</button><br>

                    </div>
                </form>
                <div class="p-of-register">
                    <p class="text-question-registred">Are you not register yet?</p>&nbsp;<p class="click__here--btnn" id="change-to-next-form">Click Here</p>

                </div>

            </div>

            <div class="form-registeder-to-griffindor" id="hidden2">
                <!-- <h2 class="text-registration">Registration</h2> -->
                <form action="tabla.php" method="POST"  class="form-2nd">
                    <h4 class="text-who-are-you">Tell us who are you</h4>
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
                        </label>
                        <button type="submit" class="bttn-create-account" name="register-btn">Create  account</button>

                    
                    </div>
                </form>

            </div>
        </div>
        <div class="right-part">
            <img class="side-img"src="assets/grifndor.png" alt="">

        </div>


    </div>
</body>
</html>