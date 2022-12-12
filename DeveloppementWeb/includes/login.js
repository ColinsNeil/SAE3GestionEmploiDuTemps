var identifiant = document.getElementById("identifiant").value;
var password = document.getElementById("mdp").value;

function openLogin(){
    document.getElementById("container-connection").style.display="block";
    document.getElementById("login-button").style.display="none";
}

function closeLogin(){
    document.getElementById("container-connection").style.display="none";
    document.getElementById("login-button").style.display="block";
}

function validate(){
    if(identifiant == "admin" && password == "mdp"){
        alert("Authentification autorisée");
        return false;
    }else{
        alert("Authentification refusée");
        return true;
    }
}