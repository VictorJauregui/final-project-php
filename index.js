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
const logOutBtn = document.querySelector(".btn-logOut");
const singOutModal = document.querySelector(".modal-sing-out");
const btnCancelSingOut = document.querySelector(".btn-cancel-modal-sign-out");
const btnCreateWizardFinish = document.querySelector("#btn-creating-wizard-finished");



btnCancel.addEventListener("click", cancelDelete);
for(i = 0; i < btnDelete.length; i++){
    btnDelete[i].addEventListener("click", iconDelete);
}
typesSubjects.addEventListener("click", subjectsSidebar);
btnCW.addEventListener("click", btnCreateWizard);
closeCreationModal.addEventListener("click", closeModalCreation);
firstTrimester.addEventListener("click", goToFirstTrimester);
secondTrimester.addEventListener("click", goToSecondTrimester);
thirdTrimester.addEventListener("click", goTothirdTrimester);
logOutBtn.addEventListener("click", singOut);
btnCancelSingOut.addEventListener("click", cancelSingOut);
btnCreateWizardFinish.addEventListener("click", createNewWizard);


function subjectsSidebar(){

    if(subjects.classList.contains("types-of-subjects")){
        subjects.classList.replace("types-of-subjects", "types-of-subjects-show")
        typesSubjects.style.backgroundColor = "transparent";
    } else if(subjects.classList.contains("types-of-subjects-show")){
        subjects.classList.replace("types-of-subjects-show", "types-of-subjects")
    }
}

function iconDelete(e){

    if(fullModal.classList.contains("modal-full")){
        fullModal.classList.replace("modal-full", "modal-full-show")
    }

    if(deleteModal.classList.contains("modal-delete")){
        deleteModal.classList.replace("modal-delete", "modal-delete-show")
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

}

function goToSecondTrimester(){
    firstTrimester.style.backgroundColor = "#fdb0174a";
    secondTrimester.style.backgroundColor = "#FDAF17";
    thirdTrimester.style.backgroundColor = "#fdb0174a";

}

function goTothirdTrimester(){
    firstTrimester.style.backgroundColor = "#fdb0174a";
    secondTrimester.style.backgroundColor = "#fdb0174a";
    thirdTrimester.style.backgroundColor = "#FDAF17";

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

function createNewWizard(e){
    
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
            // textIdNewWizard.textContent = data.nameWizard;

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
            iconDeleteWizard.setAttribute("src", "assets/trush.png");

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
            divAllWizardInformation.appendChild(divIconDeleteWizard);
            divIconDeleteWizard.appendChild(iconDeleteWizard);

        
              }
    
        })
        .catch((err) => console.log("Request: ", err));

        if(fullModal.classList.contains("modal-full-show")){
            fullModal.classList.replace("modal-full-show", "modal-full")
        }
        
        if(creationModal.classList.contains("modal-creation-show")){
            creationModal.classList.replace("modal-creation-show", "modal-creation")
        }
}