<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
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
                <form action="login.php" method="POST" class="form-login">
                    <div class=div--center>
                        <label class="user-login">
                            User <br>
                            <input class="input--large" type="text" name="email-login">
                            <br>
                            <br>
                        </label>
                        <label > 
                            Password <br>
                            <input class="input--large" type="password" name="pass-login">
                            <br>
                                            
                    <?php if(!empty($message)): ?>
                    <p> <?= $message ?></p>
                    <?php endif; ?>
                        </label>
                        <br>
                        <button class="bttn">Log in</button><br>

                    </div>
                </form>
                <div class="p-of-register">
                    <p>Are you not register yet? <p class="click__here--btnn" id="change-to-next-form"> Click Here</p></p>
                </div>
            </div>
            <div class="form-registeder-to-griffindor" id="hidden2">
                <form action="tabla.php" method="POST"  class="form-2nd">
                    <div class="checkbox-position">
                        <label class="label-input-radio">
                            <input  type="radio" class="radio-check" name="for__select--one" value="Teacher">Teacher
                        </label>
                        <label class="label-input-radio">
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
                            <input type="password" class="input--large-1 pass-of-register" name="pass" minlenght=5>
                        </label>
                        <label for="file-upload">
                            <div class="div-uplade-picture">
                                <img class="uplade-picture" src="img/uplade-picture.webp" alt="uplade picure">
                            </div>
                         </label>
                        <form class="form-disable-file" enctype="multipart/form-data">
                            <input class="input-file-disable" id="file-upload" type="file" name="file-upload">
                            <button class="btn-disable" type="submit" name="uploadBtn">UPLOAD</button>
                        </form>
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