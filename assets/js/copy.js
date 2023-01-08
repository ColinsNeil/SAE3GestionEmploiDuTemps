function copyKeyboard() {
    var copyText = document.getElementById("EmailText");

    copyText.select();
    copyText.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(copyText.value.toLowerCase());
    alert(copyText.value.toLowerCase() + " copiée !");
}
