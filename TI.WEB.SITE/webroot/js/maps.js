//javascript.js
//definir opções de mapa

$(document).ready(function () {

    //recebe os enderecos do php
    array_pedidos = enderecos.split('|');

    calcRoute();
});

var myLatLng = {lat: -19.9783096, lng: -44.0704645};
var mapOptions = {
    center: myLatLng,
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

//criar mapa
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

//crie um objeto DirectionsService para usar o método de rota e obter um resultado para nossa solicitação
var directionsService = new google.maps.DirectionsService();

//crie um objeto DirectionsRenderer que usaremos para exibir a rota
var directionsDisplay = new google.maps.DirectionsRenderer();

//vincular o DirectionsRenderer ao mapa
directionsDisplay.setMap(map);

//definir a função calcRoute
function calcRoute() {

    //criar requisição
    var request = {
        //Inicia e termina na igreja
        origin: "Rua Décio Cardoso, 196 - Durval de Barros, Ibirité - MG, Brasil",
        destination: "Rua Décio Cardoso, 196 - Durval de Barros, Ibirité - MG, Brasil",
        waypoints: [],
        optimizeWaypoints: true,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
    }

    if (array_pedidos.length > 0) {
        for (let i = 0; i < array_pedidos.length; i = i + 1) {
            request.waypoints.push({location: array_pedidos[i], stopover: true});
        }
    }

    //passar a solicitação para o método de rota
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //exibir rota
            directionsDisplay.setDirections(result);

            //Distância total de viagem
            let dtotal = 0;
            let ttotal = 0;
            const myroute = result.routes[0];
            for (let i = 0; i < myroute.legs.length; i++) {
                dtotal += myroute.legs[i].distance.value;
                ttotal += myroute.legs[i].duration.value;
            }
            dtotal = (dtotal / 1000);
            ttotal = (ttotal / 60);
            const distanciaTotal = dtotal.toFixed(2);
            const tempoTotal = ttotal.toFixed(0);

            //Obter distância e tempo
            const output = document.querySelector('#output');
            output.innerHTML = "<div class='' style='background-color: #1f1f1f;color: white'> CAMINHO:</div>";

            for (let i = 0; i < result.routes[0].legs.length - 1; i++) {
                output.innerHTML += "<div class='' style='background-color: #1f1f1f;color: white'><br />" + result.routes[0].legs[i].end_address + ".<br /> Distancia : " + result.routes[0].legs[i].distance.text + ".<br />Duração : " + result.routes[0].legs[i].duration.text + "</div>";
            }

            output.innerHTML += "<div class='' style='background-color: #1f1f1f;color: white'> <br />Distancia total da viagem : " + distanciaTotal + " km." + "</div>";
            output.innerHTML += "<div class='' style='background-color: #1f1f1f;color: white'> Duração total da viagem : " + tempoTotal + " minutos." + "</div>";

        } else {
            //excluir rota do mapa
            directionsDisplay.setDirections({routes: []});
            //mapa do centro em Londres
            map.setCenter(myLatLng);

            //mostrar mensagem de erro
            output.innerHTML = "<div class='alert-danger'></i> Não existem rotas cadastradas!</div>";
        }
        });

}
