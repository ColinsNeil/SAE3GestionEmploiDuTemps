function OpenAddorUpdate($elementToDisplay){
    if($elementToDisplay == "AddClasse"){
        document.getElementById($elementToDisplay).style.display="inline-block"; 
    }else{
        document.getElementById($elementToDisplay).style.display="block"; 
    }
    document.getElementById($elementToDisplay).style.animation="backInLeft 0.5s 1"; 
}

function CloseAddorUpdate($elementToHide){
    document.getElementById($elementToHide).style.display="none";
}