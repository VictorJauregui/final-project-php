<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&family=Inria+Serif:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <title>Gryfindor</title>
</head>
<body>
<?php
    require_once ("server.php");
    require_once ("students.php");

    $newStudent = new Students();
    // $students = Students::allStudents();

    // $newStudent = Students::getId(2);
    // $newStudent->delete();

    

?>

<!-- MODAL -->

    <!-- FullModal -->
    
    <div class="modal-full">
        <div class="modal-delete">
            <img class="logo-modal" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
            <p>Are you sure that you want to delete this wizard?</p>
            <div class="btns-modal-delete">
                <button class="btn-cancel-modal-delete">Cancel</button>
                <button class="btn-delete-modal-delete">Delete</button>
            </div>
        </div>

    <!-- creationModal -->

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
                    <div class="trimester trimester-1">
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
            <button class="btn-create-wizard-2">Create</button>
        </div>

    <!-- singOutModal -->

        <div class="modal-sing-out">
            <img class="logo-modal" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
            <p>Would you like to sing?</p>
            <div class="btns-modal-sign-out">
                <button class="btn-cancel-modal-sign-out">Cancel</button>
                <button class="btn-delete-modal-sign-out">Confirm</button>
            </div>
        </div>
        
    </div>
    <div class="div-logo">
        <img class="div-logo__image" src="assets/Gryffindor-Logo.png" alt="logo escuela de grifindor">
    </div>
    <div class="full-screen">

<!-- TEACHER VISION -->

        <div class="sidebar">
            <div class="title-and-subjects">
                <h2 class="h2-subject" id="subject">Subjects</h2>
                <div class="types-of-subjects" id="subjects">
                    <p class="types-of-subjects__subject" id="astronomy">Astronomy</p>
                    <p class="types-of-subjects__subject" id="incatations">Incatations</p>
                    <p class="types-of-subjects__subject" id="dark-arts">Dark arts</p>
                    <p class="types-of-subjects__subject" id="defense-dark-art">Defense Dark arts</p>
                    <p class="types-of-subjects__subject" id="flight">Flight</p>
                    <p class="types-of-subjects__subject" id="herbology">Herbology</p>
                </div>  
            </div>
            <div class="title-and-subjects">
                <h2 class="h2-sidebar" id="calendary">Calendary</h2>
            </div>
            <div class="div-sidebar-bottom">
                <div class="sidebar-bottom">
                    <img class="img-user"src="assets/dumbledore.png" alt="dumbledore">
                    <div>
                        <p class="name-admin">Dambledor</p>
                        <p class="type-admin">Teacher</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area">
            <h2 class="content-area__title">Score</h2>
            <div class="work-area">
                <div class="subtitles">
                    <h3 class="subtitles__h3">Name</h3>
                    <h3 class="subtitles__h3">Last Name</h3>
                    <h3 class="subtitles__h3">Email</h3>
                    <h3 class="subtitles__h3">Califications</h3>
                </div>
                <div class="data-student">
                    <div class="data-student__info-each-student number-id" id="id-number">
                        <p>1</p>
                    </div>
                    <div class="data-student__info-each-student student-name" id="student-name">
                        <p>Giorgi</p>
                    </div>
                    <div class="data-student__info-each-student" id="student-lastName">
                        <p>Potter</p>
                    </div>
                    <div class="data-student__info-each-student" id="email">
                        <p>giorgipotter@hotmail.com</p>
                    </div>
                    <div class="data-student__info-each-student califications" id="califications">
                        <div class="trimester">
                            <p>8</p>
                        </div>
                        <div class="trimester">
                            <p>6</p>
                        </div>
                        <div class="trimester">
                            <p>9</p>
                        </div>
                    </div>
                    <div class="data-student__info-each-student" id="email">
                        <img class="icon-trush" src="assets/trush.png" alt="trush">
                    </div>
                </div>
                <div class="div-btn-create-wizard">
                    <button class="btn-create-wizard">Create a new Wizard</button>
                </div>
            </div>
            


        </div>

<!-- PUPIL VISION -->

        <div class="sidebar-student">
            <div class="div-marks">
                <h2 class="h2-subject" id="marks">My Marks</h2>
                <div class="types-of-subjects" id="subjects">
                    <p class="types-of-subjects__subject" id="astronomy">Astronomy</p>
                    <p class="types-of-subjects__subject" id="incatations">Incatations</p>
                    <p class="types-of-subjects__subject" id="dark-arts">Dark arts</p>
                    <p class="types-of-subjects__subject" id="defense-dark-art">Defense Dark arts</p>
                    <p class="types-of-subjects__subject" id="flight">Flight</p>
                    <p class="types-of-subjects__subject" id="herbology">Herbology</p>
                </div>  
            </div>
            <div class="title-and-subjects">
                <h2 class="h2-sidebar" id="calendary">Calendary</h2>
            </div>
            <div class="div-sidebar-bottom">
                <div class="sidebar-bottom">
                    <img class="img-user" src="assets/harry-potter.png" alt="dumbledore">
                    <div>
                        <p class="name-admin">Harry Potter</p>
                        <p class="type-admin">Future Wizard</p>
                    </div>
                    
                </div>
                <div class="div-btn-logOut">
                    <button class="btn-logOut">Log out</button>
                </div>
            </div>
        </div>
        <!-- Cuadro de notas -->
        
        <div class="content-area-student">
            <h2 class="content-area-student__title">Hey Student</h2>
            <h3 class="content-area-student__subtitle">Here, you can find your marks</h3>
            <div class= "student-trimesters">
                    <div class="student-trimester student-trimester1">
                        <p>1st Trimester</p>    
                    </div>
                    <div class="student-trimester student-trimester2"> 
                        <p>2nd Trimester</p>    
                    </div>
                    <div class="student-trimester student-trimester3"> 
                        <p>3rd Trimester</p>    
                    </div>    
            </div>
            <div class="work-area-student">
                
                <div class="all-subjects">
                    <div class="mark-calification">
                        <div class="subject-name">
                            <p>Astronomy</p>
                        </div>
                        
                        <div class="number-score"> 
                            <p>8</p>
                        </div>
                        
                    </div>
                    <div class="mark-calification">
                        <div class="subject-name">
                            <p>Astronomy</p>
                        </div>
                        
                        <div class="number-score"> 
                            <p>8</p>
                        </div>
                        
                    </div>
                    <div class="mark-calification">
                        <div class="subject-name">
                            <p>Astronomy</p>
                        </div>
                        
                        <div class="number-score"> 
                            <p>8</p>
                        </div>
                        
                    </div>
                    <div class="mark-calification">
                        <div class="subject-name">
                            <p>Astronomy</p>
                        </div>
                        
                        <div class="number-score"> 
                            <p>8</p>
                        </div>
                        
                    </div>
                    <div class="mark-calification">
                        <div class="subject-name">
                            <p>Astronomy</p>
                        </div>
                        
                        <div class="number-score"> 
                            <p>8</p>
                        </div>
                        
                    </div>
                    <div class="mark-calification">
                        <div class="subject-name">
                            <p>Astronomy</p>
                        </div>
                        
                        <div class="number-score"> 
                            <p>8</p>
                        </div>
                        
                    </div>
                </div>
                <!-- <div class="div-btn-save">
                    <button class="btn-save">Save</button>
                </div> -->
            </div>
            


        </div>
    </div>
    
</body>
</html>