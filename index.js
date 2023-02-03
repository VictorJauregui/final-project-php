const typesSubjects = document.querySelector(".title-and-subjects");
const subjects = document.querySelector(".types-of-subjects");
const btnDelete = document.querySelector(".icon-trush");
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

btnCancel.addEventListener("click", cancelDelete);
btnDelete.addEventListener("click", iconDelete);
typesSubjects.addEventListener("click", subjectsSidebar);
btnCW.addEventListener("click", btnCreateWizard);
closeCreationModal.addEventListener("click", closeModalCreation);
firstTrimester.addEventListener("click", goToFirstTrimester);
secondTrimester.addEventListener("click", goToSecondTrimester);
thirdTrimester.addEventListener("click", goTothirdTrimester);
logOutBtn.addEventListener("click", singOut);
btnCancelSingOut.addEventListener("click", cancelSingOut);

    



function subjectsSidebar(){

    if(subjects.classList.contains("types-of-subjects")){
        subjects.classList.replace("types-of-subjects", "types-of-subjects-show")
        typesSubjects.style.backgroundColor = "transparent";
    } else if(subjects.classList.contains("types-of-subjects-show")){
        subjects.classList.replace("types-of-subjects-show", "types-of-subjects")
        typesSubjects.style.backgroundColor.hover = "red";
    }
}

function iconDelete(){
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