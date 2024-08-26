$(document).ready(iniciar)
 
function iniciar() {
    $("body").css("background-color", "#f0f0f0");
    $("body").css("margin", "0");
    $("body").css("padding", "0");
    $("body").css("display", "flex");
    $("body").css("flex-direction", "column");
    $("body").css("min-height", "100vh"); 
    $("body").css("align-items", "center"); 
};

$(document).ready(function() {
    $('form').on('submit', function(event) {
        event.preventDefault();
        alert('Mensagem enviada com sucesso! Logo entraremos em contato.');
    });
});