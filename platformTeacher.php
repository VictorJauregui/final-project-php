<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styleWizard.css">
    <script src="Javascript/indexTeacher.js?v=<?php echo time(); ?>" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&family=Inria+Serif:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <title>Gryfindor</title>
</head>
<body>
<?php
    session_start();
    require_once ("server.php");
    require_once ("students.php");

    $newStudent = new Students();

?>
    <div class="modal-full">
        <div class="modal-delete">
            <img class="logo-modal" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
            <p>Are you sure that you want to delete this wizard?</p>
            <div class="btns-modal-delete">
                <button class="btn-cancel-modal-delete">Cancel</button>
                <button class="btn-delete-modal-delete">Delete</button>
            </div>
        </div>
        <div class="modal-creation">
            <div class="div-icon-close-modal">
                <img class="icon-close-modal" src="assets/icon-close-modal.png" alt="">
            </div>
            <img class="logo-modal logo-creation" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
            <h2>Create future wizard</h2>
            <label>Name</label><br>
            <input type="text" id="name-wizard"><br>
            <label>Last Name</label><br>
            <input type="text" id="lastName-wizard"><br>
            <label>Email</label><br>
            <input type="text" id="email-wizard"><br>
            <p>Califications</p>
            <div class="div-califications-for-trimester">
                <div class="califications-for-trimester">
                    <div class="trimester trimester-1" >
                        <label>1st</label>
                        <input type=text id="calification-1st">
                    </div>
                    <div class="trimester trimester-2">
                        <label>2nd</label>
                        <input type=text id="calification-2nd">
                    </div>
                    <div class="trimester trimester-3">
                        <label>3rd</label>
                        <input type=text id="calification-3rd">
                    </div>
                </div>
            </div>
            <button class="btn-create-wizard-2" id="btn-creating-wizard-finished">Create</button>
        </div>
        <div class="modal-update">
            <img class="logo-modal" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
            <p class="title-modal-update">What information would you like to change in this wizard?</p>
            <div class="information-wizard-modal-update">
                <div class="div-name-update">
                    <p>Name</p>
                    <input id="nameWizardUpdate" type="text">
                </div>
                <div>
                    <p>Last name</p>
                    <input id="lastNameWizardUpdate" type="text">
                </div>
                <div>
                    <p>Email</p>
                    <input id="emailWizardUpdate"type="email">
                </div>
            </div>
            <div class="text-califications-modal-update">
                <p>Califications</p>
            </div>
            <div class="califications-modal-update">
                <div class="califications-trimester-modal-update" >
                    <label>1st</label>
                    <input type=text id="calification-1st-update">
                </div>
                <div class="califications-trimester-modal-update">
                    <label>2nd</label>
                    <input type=text id="calification-2nd-update">
                </div>
                <div class="califications-trimester-modal-update">
                    <label>3rd</label>
                    <input type=text id="calification-3rd-update">
                </div>
            </div>
            <div class="btns-modal-sign-out">
                <button class="btn-cancel-modal-update">Cancel</button>
                <button class="btn-delete-modal-update">Confirm</button>
            </div>
        </div>
        <div class="modal-sing-out">
            <img class="logo-modal" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
            <p>Would you like to sing out?</p>
            <div class="btns-modal-sign-out">
                <button class="btn-cancel-modal-sign-out">Cancel</button>
                <a href="./index.php"> <button class="btn-delete-modal-sign-out" >Confirm</button></a>
            </div>
        </div>
        <div class="calendary-modal">
            <img class="logo-modal" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
            <p>What are you going to do in this hour?</p>
            <select class="change-subjects" name="subjects"><br><br>
                  <option value="Astronomy">Astronomy</option>
                  <option value="Incatations">Incatations</option>
                  <option value="Dark-arts">Dark Arts</option>
                  <option value="Defense-dark-arts">Defense dark Arts</option>
                  <option value="Flight">Flight</option>
                  <option value="Herbology">Herbology</option>
                </select>
            <div class="btns-modal-calendary">
                <button class="btn-change-subject">Confirm</button>
            </div>
        </div>
        
    </div>
    <div class="div-logo">
        <img class="div-logo__image" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
    </div>
    <div class="full-screen">
        <div class="sidebar">
            <div class="title-and-subjects" id="scores">
                <h2 class="h2-subject" id="subject">Students</h2>
            </div>
            <div class="title-and-subjects">
                <h2 class="h2-sidebar" id="calendary">Calendary</h2>
            </div>
            <div class="div-sidebar-bottom">
                <div class="sidebar-bottom">
                    <img class="img-user"src="assets/dambledore.gif" alt="dumbledore">
                    <div>
                        <p class="name-admin"><?php  echo $_SESSION['email'] ?></p>
                        <p class="type-admin">Teacher</p>
                    </div>
                </div>
                <div class="div-btn-logOut">
                    <button class="btn-logOut">Log out</button>
                </div>
            </div>
        </div>
        
        <div class="content-area">
            <h2 class="content-area__title">Students</h2>
            <div class="work-area">
                <div class="subtitles">
                    <h3 class="subtitles__h3">Name</h3>
                    <h3 class="subtitles__h3">Last Name</h3>
                    <h3 class="subtitles__h3">Email</h3>
                    <h3 class="subtitles__h3">Califications</h3>
                </div>
                <div class="div-data-student">
                </div>
                <div class="div-btn-create-wizard">
                    <button class="btn-create-wizard">Create a new Wizard</button>
                </div>
            </div>
            <div class="week-calendary">
                <div class="days">  
                    <p>Monday</p>
                    <p>Tuesday</p>
                    <p>Wednesday</p>
                    <p>Thrusday</p>
                    <p>Friday</p> 
                </div>
                <div class="div-subjects-of-days">
                    <div class="subjects-of-days">
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">09:00 - 10:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">09:00 - 10:00</p>
                            <p class="subject-type">Incatations</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">09:00 - 10:00</p>
                            <p class="subject-type">Dark arts</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">09:00 - 10:00</p>
                            <p class="subject-type">Defense Dark arts</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">09:00 - 10:00</p>
                            <p class="subject-type">Flight</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                    </div>
                    <div class="subjects-of-days">
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">10:00 - 11:00</p>
                            <p class="subject-type">Herbology</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">10:00 - 11:00</p>
                            <p class="subject-type">Flight</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">10:00 - 11:00</p>
                            <p class="subject-type">Defense dark arts</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">10:00 - 11:00</p>
                            <p class="subject-type">Flight</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">10:00 - 11:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                    </div>
                    <div class="subjects-of-days">
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">11:00 - 12:00</p>
                            <p class="subject-type">Incatations</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">11:00 - 12:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">11:00 - 12:00</p>
                            <p class="subject-type">Herbology</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">11:00 - 12:00</p>
                            <p class="subject-type">Dark arts</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">11:00 - 12:00</p>
                            <p class="subject-type">Incatations</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                    </div>
                    <div class="subjects-of-days">
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">12:00 - 13:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">12:00 - 13:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">12:00 - 13:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">12:00 - 13:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">12:00 - 13:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                    </div>
                    <div class="subjects-of-days">
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">16:00 - 17:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">17:00 - 17:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">16:00 - 17:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">16:00 - 17:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">16:00 - 17:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                    </div>
                    <div class="subjects-of-days">
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">17:00 - 18:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">17:00 - 18:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">17:00 - 18:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">17:00 - 18:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                        <div class="hour-and-subjects-of-days">
                            <p class="monday-first">17:00 - 18:00</p>
                            <p class="subject-type">Astronomy</p>
                            <div class="div-img-pencil">
                                <img class="pencil-edit" src="assets/pencil.png" alt="edit calendary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>