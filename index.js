const typesSubjects = document.querySelector(".title-and-subjects");
const subjects = document.querySelector(".types-of-subjects");
const btnDelete = document.querySelector(".icon-trush");
const fullModal = document.querySelector(".modal-full");
const deleteModal = document.querySelector(".modal-delete");
const btnCancel = document.querySelector(".btn-cancel-modal-delete");
const btnCW = document.querySelector(".btn-create-wizard");
const creationModal = document.querySelector(".modal-creation");
const closeCreationModal = document.querySelector(".icon-close-modal");

btnCancel.addEventListener("click", cancelDelete);
btnDelete.addEventListener("click", iconDelete);
typesSubjects.addEventListener("click", subjectsSidebar);
btnCW.addEventListener("click", btnCreateWizard);
closeCreationModal.addEventListener("click", closeModalCreation);


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