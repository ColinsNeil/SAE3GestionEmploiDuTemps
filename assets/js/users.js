function AddUpdateUsers($elementToDisplay){
    document.getElementById($elementToDisplay).style.display="block"; 
    document.getElementById($elementToDisplay).style.animation="backInLeft 0.5s 1"; 
}

function CloseAddUpdateUsers($elementToHide){
    document.getElementById($elementToHide).style.display="none";
}