//javascript.js
//definir opções de mapa

$(document).ready(function(){
    $('.contact').mask('(00) 00000-0000');
    $('.cep').mask('00000-000');
});

//criar objetos de preenchimento automático para todas as entradas

var input1 = document.getElementById("address");
var autocomplete1 = new google.maps.places.Autocomplete(input1);
