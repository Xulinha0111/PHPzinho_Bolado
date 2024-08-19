$(document).ready(iniciar);

function iniciar(){
    alert("Biblioteca jQuery - Propriedades utilizando CSS");

    //document.getElementById("paragrafo1").style.color = "blue";

    //$("#paragrafo1").css("background-color", "green");

    $("#paragrafo1").css({
        "background-color":"green",
        "font-weight":"bold",
        "color":"yellow",
        "padding":"10px 20px",
        "font-size":"25px",
        "width":"60%"
    })
}