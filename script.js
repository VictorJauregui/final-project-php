const clickHereBtnn=document.querySelector(".click__here--btnn");
clickHereBtnn.addEventListener("click",passTo2ndFormulary);
function passTo2ndFormulary(){
    const nextForm=document.getElementById("login-form");
    const hidden2nd=document.getElementById("hidden2");
    nextForm.classList.toggle("hidden-login");
    hidden2nd.classList.toggle("full-screen-1");
    console.log("nextForm");
}