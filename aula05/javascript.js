document.write("<p><strong>Biblioteca de jQuery</strong></p>");

$(document).ready(iniciar);

function iniciar() {
    $("*").css("background", "wheat");
    $("*").css("color", "black");
    //Modifica somente as listas não ordenadas
    $("ul li").css("color", "white");
    $("ul li").css("background", "darkred");

    //Modifica somente as listas ordenadas
    $("ol li").css("color", "white");
    $("ol li").css("background", "darkgreen");

    $("ul li:first").html("<em>HTML</em> - Linguagem de Marcação");
    $("ul li:first").html("<em>HTML</em> - Linguagem de Marcação").css("background", "red");
    $("ul li:first").html("<em>HTML</em> - Linguagem de Marcação").css("width", "15%");
    $("ul li:first").html("<em>HTML</em> - Linguagem de Marcação").css("padding", "1em");

    $("ul li:last").html("<em>jQuery</em> - Biblioteca de Javascript").css("background", "black").css("width", "15%");
    $("ul li:last").html("<em>jQuery</em> - Biblioteca de Javascript").css("padding", "1em");

    $("ul li:even").html("<em>ÍMPARES</em>").css("background", "orange");
    $("ul li:even").html("<em>ÍMPARES</em>").css("padding", "2%");
    $("ul li:even").html("<em>ÍMPARES</em>").css("width", "10%");

    $("ul li:odd").html("<em>PARES</em>").css("background", "violet");
    $("ul li:odd").html("<em>PARES</em>").css("padding", "2%");
    $("ul li:odd").html("<em>PARES</em>").css("width", "10%");
}