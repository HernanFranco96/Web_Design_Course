console.log('Eventos en JS');

var uno = () =>{
    console.log('Soy la funcion 1');
}

var dos = () =>{
    console.log('Soy la funcion 2');
}

uno();
dos();

console.log('---------------------------------');

//Podemos ejecutar una funcion dentro de otra. 
    //Es una funcion que se llama por referencia dentro de otra funcion.
function prueba(item, callback){ 
    console.log(item);
    callback();
}

prueba(12,uno);

console.log('---------------------------------');

function operacion(a,b,cb){
    return cb(a,b);
}

const suma = (a,b) => a + b
const resta = (a,b) => a - b
const mult = (a,b) => a * b
const div = (a,b) => a / b


console.log(`La suma es: ${operacion(12,12,suma)}`);
console.log(`La resta es: ${operacion(50,12,resta)}`);
console.log(`La multiplicacion es: ${operacion(6,5,mult)}`);
console.log(`La division es: ${operacion(100,25,div)}`);

console.log('---------------------------------');
//----------------------
//      Eventos
//----------------------

var btn = document.getElementById('btn');
//btn.onclick = () =>{
//    console.log('click');
//}

//btn.onclick = () => {
//    uno();
//    dos();
//}

btn.addEventListener('click', uno);
btn.addEventListener('click', dos);
btn.addEventListener('click', function() {
    console.log('Soy otra funcion');
})

//---------------------------
//      Objeto Event
//---------------------------

btn.addEventListener('click', function(e) {
    console.log(e);
})

//---------------------------
//  Propagacion de eventos
//---------------------------

var UNO = document.getElementById('uno');
var DOS = document.getElementById('dos');
var TRES = document.getElementById('tres');

TRES.addEventListener('click',function(e){
    e.stopPropagation();
    console.log('click tres');
}, !false) 

DOS.addEventListener('click',function(e){
    console.log('click dos');
}, !false) 

UNO.addEventListener('click',function(){
    console.log('click uno');
}, !false) 

//------------------------------------------------
//  Aplicacion avanzada de propagacion de eventos
//------------------------------------------------

var estatico = document.getElementById('estatico');
var botonCreado = false;

estatico.addEventListener('click', function(){
    console.log('Soy el boton estatico');

    if(!botonCreado)
    {
        var dinamico = document.createElement('button');
        dinamico.innerText = 'Dinamico';
        dinamico.id = 'dinamico';
        document.body.appendChild(dinamico);

        /*
        var dinamico = document.getElementById('dinamico');
        dinamico.addEventListener('click', function(){
            console.log('Soy el boton dinamico');
        })
        */

        botonCreado = true;
    }
})

document.addEventListener('click', function(e){
    var id = e.target.id; // Guardamos el id del evento que se ejecuta
    console.log('id: ', e.target.id);

    if(id=='dinamico'){
        console.log('Soy el boton dinamico');
    }
})

//----------------------------------------
//  Eventos con comportamiento automatico
//----------------------------------------

var link = document.getElementById('link');
link.addEventListener('click', function(e){
    e.preventDefault(); // Cancela un evento automatico.
    console.log('Click en Link!!');
})

//-------------------------------------------
//  Manipulacion del DOM en un evento de BOM
//-------------------------------------------

var info = document.getElementById('info-resize');

window.addEventListener('resize', () => {
    //console.log('Cambio el tamaño del navegador');
    info.innerText = `El tamaño externo del navegador es ${outerWidth} x ${outerHeight} pixeles.
    El tamaño interno del navegador es ${innerWidth} x ${innerHeight} pixeles.`
})


//-----------------
//  Eventos Custom
//-----------------

//bubbles true: Este evento esta preparado para permitir la propagacion
//Creacion del evento look
var ev = new Event('look', {'bubbles': true, 'cancelable': false})

// Escucho evento look
document.addEventListener('look', () =>{
    console.log('Evento look');
})

document.getElementById('btn-look').addEventListener('click', () => {
    //Ejecuto el evento look
    document.dispatchEvent(ev);
})
