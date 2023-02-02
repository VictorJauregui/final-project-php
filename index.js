const typesSubjects = document.querySelector(".title-and-subjects");
const subjects = document.querySelector(".types-of-subjects")



typesSubjects.addEventListener("click", subjectsSidebar);


function subjectsSidebar(){

    if(subjects.classList.contains("types-of-subjects")){
        subjects.classList.replace("types-of-subjects", "types-of-subjects-show")
        typesSubjects.style.backgroundColor = "transparent";
    } else if(subjects.classList.contains("types-of-subjects-show")){
        subjects.classList.replace("types-of-subjects-show", "types-of-subjects")
        typesSubjects.style.backgroundColor.hover = "red";
    }
}