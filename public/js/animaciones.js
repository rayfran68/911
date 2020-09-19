window.addEventListener('scroll', function(){


let animacion = document.getElementById('animacion');
let posicionobj1  = animacion.getBoundingClientRect().top;

console.log(posicionobj1);

let tamañoDePantalla =window.innerHeight/2;

var emergencia = document.getElementById('emergencia');

var lugar = document.getElementById('lugar');

if( posicionobj1 < tamañoDePantalla){

    lugar.className += 'fadeIn delay-2s';


    emergencia.className += 'bounceIn slower';

}



})











