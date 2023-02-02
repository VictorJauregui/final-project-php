const typesSubjects = document.querySelector(".title-and-subjects");
const subjects = document.querySelector(".types-of-subjects")



typesSubjects.addEventListener("click", subjectsSidebar);


function subjectsSidebar(){
    if(subjects.classList.contains("types-of-subjects")){
        subjects.classList.replace("types-of-subjects", "types-of-subjects-show");
    }
    console.log("hi");
}