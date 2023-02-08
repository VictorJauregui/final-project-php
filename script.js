// const clickHereBtnn=document.querySelector(".click__here--btnn");
// const selectorTeacherBtn=document.querySelector(".text");



// clickHereBtnn.addEventListener("click",passTo2ndFormulary);
// selectorTeacherBtn.addEventListener("click",selector);

// function passTo2ndFormulary(){
//     const nextForm=document.getElementById("login-form");
//     const hidden2nd=document.getElementById("hidden2");
//     nextForm.classList.toggle("hidden-login");
//     hidden2nd.classList.toggle("full-screen-1");
//     console.log("nextForm");
// }

// function selector(){
//     const selectorTeacherBtnColor=document.getElementsByClassName("text");
//     selectorTeacherBtnColor.style.backgroundColor="red";
// }

const teacherBtn = document.querySelector("#teacher-btn");//1
const wizardBtn =  document.querySelector("#wizard-btn");//1
const clickHere=document.querySelector("#change-to-next-form");//2
const logInPage=document.querySelector(".form-to-access");
const registeredForm=document.getElementById("hidden2");
const inputsRegister=document.querySelector(".input--large-1");

teacherBtn.addEventListener("click",teacherBtnStay);//1
wizardBtn.addEventListener("click",wizardSelection);//1

clickHere.addEventListener("click",registerPage);//2

inputsRegister.addEventListener("click",deleteValue);

function teacherBtnStay(){
    document.getElementById('teacher-btn').style=" background:linear-gradient(0deg, #FDAF17, #FDAF17), #8F8E8E; ;";
    document.getElementById('wizard-btn').style="background: rgba(255, 169, 0, 0.32);"; //1
}
function wizardSelection(){
    document.getElementById('wizard-btn').style=" background:linear-gradient(0deg, #FDAF17, #FDAF17), #8F8E8E; ;";
    document.getElementById('teacher-btn').style="background: rgba(255, 169, 0, 0.32);"; //1
}


function registerPage(){
    // logInPage.classList.toggle("hidden-login");
    // registerPage.classList.toggle("not-hidden");
   
    if(logInPage.classList.contains("form-to-access")) {  
    logInPage.classList.replace("form-to-access","form-to-access-notShow");
}

    if(registeredForm.classList.contains("form-registeder-to-griffindor")) {  
        registeredForm.classList.replace("form-registeder-to-griffindor","form-registeder-to-griffindor-show");
    }

}

function deleteValue(){
    inputsRegister.value("");
}

