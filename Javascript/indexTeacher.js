const typesSubjects = document.querySelector(".title-and-subjects");
const subjects = document.querySelector(".types-of-subjects");
const btnDelete = document.querySelectorAll(".icon-trush");
const fullModal = document.querySelector(".modal-full");
const deleteModal = document.querySelector(".modal-delete");
const btnCancel = document.querySelector(".btn-cancel-modal-delete");
const btnCW = document.querySelector(".btn-create-wizard");
const creationModal = document.querySelector(".modal-creation");
const closeCreationModal = document.querySelector(".icon-close-modal");
const firstTrimester = document.querySelector(".student-trimester1");
const secondTrimester = document.querySelector(".student-trimester2");
const thirdTrimester = document.querySelector(".student-trimester3");
const logOutBtn = document.querySelectorAll(".btn-logOut");
const singOutModal = document.querySelector(".modal-sing-out");
const btnCancelSingOut = document.querySelector(".btn-cancel-modal-sign-out");
const btnCreateWizardFinish = document.querySelector("#btn-creating-wizard-finished");
const btnUpdate = document.querySelectorAll(".icon-update");
const updateModal = document.querySelector(".modal-update");
const closeUpdateModal = document.querySelector(".btn-cancel-modal-update");
const updateWizard = document.querySelector(".btn-delete-modal-update");
const teacherAreaCalifications = document.querySelector(".work-area");
const deleteWizard = document.querySelector(".btn-delete-modal-delete");
const editSubjectCalendary = document.querySelectorAll(".pencil-edit");
const idNameAdmin = document.querySelector("#admin-name");
// const nameAdmin = idNameAdmin.textContent;
const globalCalifications = document.querySelector(".global-califications");
const globalCalifications2 = document.querySelector(".global-califications-2");
const globalCalifications3 = document.querySelector(".global-califications-3");
const workAreaStudent = document.querySelector("#workAreaStudent");
const calificationsGlobalFirst = document.querySelector(".mark-calification");
const calificationsGlobalSecond = document.querySelector(".mark-calification-2");
const calificationsGlobalThird = document.querySelector(".mark-calification-3");




// workAreaStudent.addEventListener("load", getWizardById());
teacherAreaCalifications.addEventListener("load", getAllWizards());
btnCancel.addEventListener("click", cancelDelete);
for(i = 0; i < btnUpdate.length; i++){
    btnUpdate[i].addEventListener("click", iconUpdate);
}
for(i = 0; i < btnDelete.length; i++){
    btnDelete[i].addEventListener("click", iconDelete);
}
typesSubjects.addEventListener("click", subjectsSidebar);
btnCW.addEventListener("click", btnCreateWizard);
closeCreationModal.addEventListener("click", closeModalCreation);
// firstTrimester.addEventListener("click", goToFirstTrimester);
// secondTrimester.addEventListener("click", goToSecondTrimester);
// thirdTrimester.addEventListener("click", goTothirdTrimester);
// for(i = 0; i < logOutBtn.length; i++){
//     logOutBtn[i].addEventListener("click", singOut);
// }

btnCancelSingOut.addEventListener("click", cancelSingOut);
btnCreateWizardFinish.addEventListener("click", createNewWizard);
closeUpdateModal.addEventListener("click", closeModalUpdate);
updateWizard.addEventListener("click", confirmNewUpdate);
deleteWizard.addEventListener("click", confirmDeleteWizard);






function subjectsSidebar(){

    if(subjects.classList.contains("types-of-subjects")){
        subjects.classList.replace("types-of-subjects", "types-of-subjects-show")
        typesSubjects.style.backgroundColor = "transparent";
    } else if(subjects.classList.contains("types-of-subjects-show")){
        subjects.classList.replace("types-of-subjects-show", "types-of-subjects")
    }
}

let idUpdate = ""

function iconUpdate(event){
    idUpdate = event.target.getAttribute("studentId");
    
    if(fullModal.classList.contains("modal-full")){
        fullModal.classList.replace("modal-full", "modal-full-show")
    }

    if(updateModal.classList.contains("modal-update")){
        updateModal.classList.replace("modal-update", "modal-update-show")
    }

}

function confirmNewUpdate(){

    const inputNameWizardUpdate = document.querySelector("#nameWizardUpdate");
    const inputLastNameWizardUpdate = document.querySelector("#lastNameWizardUpdate");
    const inputEmailWizardUpdate = document.querySelector("#emailWizardUpdate");
    const inputFirstCalificationUpdate = document.querySelector("#calification-1st-update");
    const inputSecondCalificationUpdate = document.querySelector("#calification-2nd-update");
    const inputThirdCalificationUpdate = document.querySelector("#calification-3rd-update");

    
    const name = inputNameWizardUpdate.value;
    const lastName = inputLastNameWizardUpdate.value;
    const email = inputEmailWizardUpdate.value;
    const firstCalification = inputFirstCalificationUpdate.value;
    const secondCalification = inputSecondCalificationUpdate.value;
    const thirdCalification = inputThirdCalificationUpdate.value;


    fetch(`./updateWizard.php?studentId=${idUpdate}&nameWizardUpdate=${name}&lastNameWizardUpdate=${lastName}&emailWizardUpdate=${email}&firstCalificationUpdate=${firstCalification}&secondCalificationUpdate=${secondCalification}&thirdCalificationUpdate=${thirdCalification}`, {
        method: "GET",
      })
        .then((response) => response.json())
        .then((data) => {
           if(data.ok){
            
            const nameWizardValue = document.querySelector(`#name-${idUpdate}`);
            const lastNameWizardValue = document.querySelector(`#lastName-${idUpdate}`);
            const emailWizardValue = document.querySelector(`#email-${idUpdate}`);
            const firstTrimesterValue = document.querySelector(`#firstTrimester-${idUpdate}`);
            const secondTrimesterValue = document.querySelector(`#secondTrimester-${idUpdate}`);
            const thirdTrimesterValue = document.querySelector(`#thirdTrimester-${idUpdate}`);
            nameWizardValue.textContent = name;
            lastNameWizardValue.textContent = lastName;
            emailWizardValue.textContent = email;
            firstTrimesterValue.textContent = firstCalification;
            secondTrimesterValue.textContent = secondCalification;
            thirdTrimesterValue.textContent = thirdCalification;

           }
        })
        
        // if(email === nameAdmin){
        //     globalCalifications.innerHTML = firstCalification;
        // }
        
        if(fullModal.classList.contains("modal-full-show")){
            fullModal.classList.replace("modal-full-show", "modal-full")
        }
    
        if(updateModal.classList.contains("modal-update-show")){
            updateModal.classList.replace("modal-update-show", "modal-update")
        }
}

function closeModalUpdate(){

    if(fullModal.classList.contains("modal-full-show")){
        fullModal.classList.replace("modal-full-show", "modal-full")
    }

    if(updateModal.classList.contains("modal-update-show")){
        updateModal.classList.replace("modal-update-show", "modal-update")
    }
}

let studentId = "";

function iconDelete(event){
    studentId = event.target.getAttribute("studentId");
    console.log(studentId)
    
    if(fullModal.classList.contains("modal-full")){
        fullModal.classList.replace("modal-full", "modal-full-show")
    }

    if(deleteModal.classList.contains("modal-delete")){
        deleteModal.classList.replace("modal-delete", "modal-delete-show")
    }
}

function confirmDeleteWizard(){
    const deleteStudent = document.querySelector(`#id-${studentId}`);
    console.log({deleteStudent})
    fetch(`./deleteWizard.php?studentId=${studentId}`, {
        method: "GET",
      })
        .then((response) => response.json())
        .then((data) => {
            // deleteStudent.remove(data.id)
            
        })

        if(fullModal.classList.contains("modal-full-show")){
            fullModal.classList.replace("modal-full-show", "modal-full")
        }
    
        if(deleteModal.classList.contains("modal-delete-show")){
            deleteModal.classList.replace("modal-delete-show", "modal-delete")
        }
}

function cancelDelete(){
    if(fullModal.classList.contains("modal-full-show")){
        fullModal.classList.replace("modal-full-show", "modal-full")
    }

    if(deleteModal.classList.contains("modal-delete-show")){
        deleteModal.classList.replace("modal-delete-show", "modal-delete")
    }     
}

function btnCreateWizard(){
    if(fullModal.classList.contains("modal-full")){
        fullModal.classList.replace("modal-full", "modal-full-show")
    }

    if(creationModal.classList.contains("modal-creation")){
        creationModal.classList.replace("modal-creation", "modal-creation-show")
    }
}

function closeModalCreation(){
    if(fullModal.classList.contains("modal-full-show")){
        fullModal.classList.replace("modal-full-show", "modal-full")
    }

    if(creationModal.classList.contains("modal-creation-show")){
        creationModal.classList.replace("modal-creation-show", "modal-creation")
    }
}

function goToFirstTrimester(){
    firstTrimester.style.backgroundColor = "#FDAF17";
    secondTrimester.style.backgroundColor = "#fdb0174a";
    thirdTrimester.style.backgroundColor = "#fdb0174a";

    if(calificationsGlobalFirst.classList.contains("mark-calification-notShow")){
        calificationsGlobalFirst.classList.replace("mark-calification-notShow", "mark-calification")
    }

    if(calificationsGlobalSecond.classList.contains("mark-calification-2-show")){
        calificationsGlobalSecond.classList.replace("mark-calification-2-show", "mark-calification-2")
    }

    if(calificationsGlobalThird.classList.contains("mark-calification-3-show")){
        calificationsGlobalThird.classList.replace("mark-calification-3-show", "mark-calification-3")
    }

}

function goToSecondTrimester(){
    firstTrimester.style.backgroundColor = "#fdb0174a";
    secondTrimester.style.backgroundColor = "#FDAF17";
    thirdTrimester.style.backgroundColor = "#fdb0174a";

    if(calificationsGlobalFirst.classList.contains("mark-calification")){
        calificationsGlobalFirst.classList.replace("mark-calification", "mark-calification-notShow")
    }

    if(calificationsGlobalSecond.classList.contains("mark-calification-2")){
        calificationsGlobalSecond.classList.replace("mark-calification-2", "mark-calification-2-show")
    }

    if(calificationsGlobalThird.classList.contains("mark-calification-3-show")){
        calificationsGlobalThird.classList.replace("mark-calification-3-show", "mark-calification-3")
    }
}

function goTothirdTrimester(){
    firstTrimester.style.backgroundColor = "#fdb0174a";
    secondTrimester.style.backgroundColor = "#fdb0174a";
    thirdTrimester.style.backgroundColor = "#FDAF17";

    if(calificationsGlobalFirst.classList.contains("mark-calification")){
        calificationsGlobalFirst.classList.replace("mark-calification", "mark-calification-notShow")
    }

    if(calificationsGlobalSecond.classList.contains("mark-calification-2-show")){
        calificationsGlobalSecond.classList.replace("mark-calification-2-show", "mark-calification-2")
    }

    if(calificationsGlobalThird.classList.contains("mark-calification-3")){
        calificationsGlobalThird.classList.replace("mark-calification-3", "mark-calification-3-show")
    }

}

function singOut(){
        if(fullModal.classList.contains("modal-full")){
            fullModal.classList.replace("modal-full", "modal-full-show")
        }

        if(singOutModal.classList.contains("modal-sing-out")){
            singOutModal.classList.replace("modal-sing-out", "modal-sing-out-show")
        }

}

function cancelSingOut(){
    if(fullModal.classList.contains("modal-full-show")){
        fullModal.classList.replace("modal-full-show", "modal-full")
    }

    if(singOutModal.classList.contains("modal-sing-out-show")){
        singOutModal.classList.replace("modal-sing-out-show", "modal-sing-out")
    }
}


function getAllWizards(){
    const studentsContainer = document.querySelector(".div-data-student")
    fetch(`./readAllWizards.php?`, {
        method: "GET",
      })
        .then((response) => response.json())
        .then((data) => {
            console.log(data)
            data.map((student)=>{
                studentsContainer.innerHTML += `
                <div class="data-student">
                        <div class="data-student__info-each-student number-id" id="id-number">
                            <p class="create-wizard-text" id='id-${student.id}'>${student.id}</p>
                        </div>
                        <div class="data-student__info-each-student student-name" id="student-name">
                            <p id='name-${student.id}'>${student.Name}</p>
                        </div>
                        <div class="data-student__info-each-student" id="student-lastName">
                            <p id='lastName-${student.id}'>${student.LastName}</p>
                        </div>
                        <div class="data-student__info-each-student" id="email">
                            <p id='email-${student.id}'>${student.Email}</p>
                        </div>
                        <div class="data-student__info-each-student califications" id="califications">
                            <div class="trimester">
                                <p id='firstTrimester-${student.id}'>${student.firstTrimester}</p>
                            </div>
                            <div class="trimester">
                                <p id='secondTrimester-${student.id}'>${student.secondTrimester}</p>
                            </div>
                            <div class="trimester">
                                <p id='thirdTrimester-${student.id}'>${student.thirdTrimester}</p>
                            </div>
                        </div>
                        <div class="data-student__info-each-student">
                            <img class="icon-update" src="assets/pencil.png" studentId=${student.id} onclick="iconUpdate(event)">
                        </div>
                        <div class="data-student__info-each-student">
                            <img class="icon-trush" src="assets/trush.png" studentId=${student.id} onclick="iconDelete(event)">
                        </div>
                    </div> `
            })
            
            
})
}



function createNewWizard(){
    
    const divDataStudent = document.querySelector(".div-data-student");
    const inputNameWizard = document.querySelector("#name-wizard");
    const inputLastNameWizard = document.querySelector("#lastName-wizard");
    const inputEmailWizard = document.querySelector("#email-wizard");
    const inputFirstCalification = document.querySelector("#calification-1st");
    const inputSecondCalification = document.querySelector("#calification-2nd");
    const inputThirdCalification = document.querySelector("#calification-3rd");

    const name = inputNameWizard.value;
    const lastName = inputLastNameWizard.value;
    const email = inputEmailWizard.value;
    const firstCalification = inputFirstCalification.value;
    const secondCalification = inputSecondCalification.value;
    const thirdCalification = inputThirdCalification.value;
    

    fetch(`./createWizard.php?nameWizard=${name}&lastNameWizard=${lastName}&emailWizard=${email}&firstCalification=${firstCalification}&secondCalification=${secondCalification}&thirdCalification=${thirdCalification}`, {
        method: "GET",
      })
        .then((response) => response.json())
        .then((data) => {
            if (data.ok) {
                console.log(data);
                
            
            const divAllWizardInformation = document.createElement("div");
            divAllWizardInformation.classList = "data-student";

            const IdNewWizard = document.createElement("div");
            IdNewWizard.classList = "data-student__info-each-student";

            const textIdNewWizard = document.createElement("p");
            textIdNewWizard.textContent = idNewWizard;

            const nameNewWizard = document.createElement("div");
            nameNewWizard.classList = "data-student__info-each-student";

            const textNameNewWizard = document.createElement("p");
            textNameNewWizard.textContent = data.nameWizard;

            const lastNameNewWizard = document.createElement("div");
            lastNameNewWizard.classList = "data-student__info-each-student";

            const textLastNameNewWizard = document.createElement("p");
            textLastNameNewWizard.textContent = data.lastName;

            const emailNewWizard = document.createElement("div");
            emailNewWizard.classList = "data-student__info-each-student";

            const textemailNewWizard = document.createElement("p");
            textemailNewWizard.textContent = data.email;

            const calificationsNewWizard = document.createElement("div");
            calificationsNewWizard.classList = "data-student__info-each-student";

            const newFirstTrimester = document.createElement("div");
            newFirstTrimester.classList = "trimester";

            const textnewFirstTrimester = document.createElement("p");
            textnewFirstTrimester.textContent = data.firstCalification;

            const newSecondTrimester = document.createElement("div");
            newSecondTrimester.classList = "trimester";

            const textnewSecondTrimester = document.createElement("p");
            textnewSecondTrimester.textContent = data.secondCalification;

            const newThirdTrimester = document.createElement("div");
            newThirdTrimester.classList = "trimester";

            const textnewThirdTrimester = document.createElement("p");
            textnewThirdTrimester.textContent = data.thirdCalification;

            const divIconDeleteWizard = document.createElement("div");
            divIconDeleteWizard.classList = "data-student__info-each-student";

            const iconDeleteWizard = document.createElement("img");
            iconDeleteWizard.classList = "icon-trush";
            iconDeleteWizard.addEventListener("click", iconDelete);
            iconDeleteWizard.setAttribute("src", "./assets/trush.png");

            const divIconUpdateWizard = document.createElement("div");
            divIconUpdateWizard.classList = "data-student__info-each-student";

            const iconUpdateWizard = document.createElement("img");
            iconUpdateWizard.classList = "icon-update";
            iconUpdateWizard.addEventListener("click", iconUpdate);
            iconUpdateWizard.setAttribute("src", "./assets/pencil.png");

            divDataStudent.appendChild(divAllWizardInformation);
            divAllWizardInformation.appendChild(IdNewWizard);
            IdNewWizard.appendChild(textIdNewWizard);
            divAllWizardInformation.appendChild(nameNewWizard);
            nameNewWizard.appendChild(textNameNewWizard);
            divAllWizardInformation.appendChild(lastNameNewWizard);
            lastNameNewWizard.appendChild(textLastNameNewWizard);
            divAllWizardInformation.appendChild(emailNewWizard);
            emailNewWizard.appendChild(textemailNewWizard);
            divAllWizardInformation.appendChild(calificationsNewWizard);
            calificationsNewWizard.appendChild(newFirstTrimester);
            newFirstTrimester.appendChild(textnewFirstTrimester);
            calificationsNewWizard.appendChild(newSecondTrimester);
            newSecondTrimester.appendChild(textnewSecondTrimester);
            calificationsNewWizard.appendChild(newThirdTrimester);
            newThirdTrimester.appendChild(textnewThirdTrimester);
            divAllWizardInformation.appendChild(divIconUpdateWizard);
            divIconUpdateWizard.appendChild(iconUpdateWizard);
            divAllWizardInformation.appendChild(divIconDeleteWizard);
            divIconDeleteWizard.appendChild(iconDeleteWizard);
            
              }
    
        })
        .catch((err) => console.log("Request: ", err));

        // if(email === nameAdmin){
        //     globalCalifications.innerHTML = firstCalification;
        //     globalCalifications2.innerHTML = secondCalification;
        //     globalCalifications3.innerHTML = thirdCalification;
        // }

        if(fullModal.classList.contains("modal-full-show")){
            fullModal.classList.replace("modal-full-show", "modal-full")
        }
        
        if(creationModal.classList.contains("modal-creation-show")){
            creationModal.classList.replace("modal-creation-show", "modal-creation")
        }
}

function getWizardById(){
    fetch(`./getWizardById.php?`, {
        method: "GET",
      })
        .then((response) => response.json())
        .then((data) => {
            console.log(data)
            globalCalifications.innerHTML = data.firstTrimester;
            globalCalifications2.innerHTML = data.secondTrimester;
            globalCalifications3.innerHTML = data.thirdTrimester;
            
        })

}
