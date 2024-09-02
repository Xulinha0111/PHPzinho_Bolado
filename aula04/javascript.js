document.write("<p><strong>Biblioteca de jQuery</strong></p>");

$(document).ready(iniciar);

function iniciar() {
    $("*").css("background", "orange");
    $("*").css("color", "white");
    $("span").css("color", "gray");
    $("div").css("color", "black");
    $("div p").css("color", "black");

    /*Esconde todas as divs
    $("div").hide();(*/

    //Esconde todas as divs que contém parágrafos
    $("div p").hide();

    //Ao clicar no elemento div, serão exibidas todas as divs com parágrafos
    $("span").click(function() {
        $("div p").show();
    });
}