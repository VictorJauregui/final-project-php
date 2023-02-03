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
                <form action="" class="form-login">
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
                <form action="" class="form-2nd">
                    <div class="checkbox-position">
                        <label >
                            <input  type="radio" class="radio-check" name="for__select--one">Teacher
                        </label>
                        <label >
                            <input type="radio" class="radio-check" name="for__select--one">Future wizard
                        </label>

                    </div>
                    <br>
                    <div class="second-form--partial">
                        <label>Name*<br>
                            <input type="text" class="input--large-1"><br>
                        </label>
                        <label>Last Name*<br>
                            <input type="text" class="input--large-1"><br>

                        </label>
                        <label>Email*<br>
                            <input type="text" class="input--large-1"><br>

                        </label>
                        <label>Password*<br>
                            <input type="password" class="input--large-1"><br>

                        </label>
                        <button type="submit" class="bttn-create-account">Create  account</button>

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