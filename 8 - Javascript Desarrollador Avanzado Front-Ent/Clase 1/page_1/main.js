console.log('Cursp JSAv - Clase 1');

// ----------------------------------------
// Nuevos constructores de variables en ES6
// ----------------------------------------
/*
for(let i=1;i<=5;i++)
{
    console.log(i);
}

console.log('--------------------------------------------');

// Bloque de codigo anónimo
{
    //var a = 6;
    //let a = 6;
    const a = 6;
    console.log(a);
}
console.log(a);

// Bloque de codigo condicional
if(true)
{
    //var b = 7;
    let b = 7;
    console.log(b);
}
//console.log(b);

// Bloque de codigo funcional
function foo()
{
    //var c = 8;
    let c = 8;
    console.log(c);
}
foo();
//console.log(c);
*/
//--------------------------------------------------------------
// Nuevos contructores de funciones en ES6
// (Arrow function, funciones flecha o expresiones lambda)
//--------------------------------------------------------------

/* 
function sumar(a,b){
    return a + b;
} 
*/

/* 
const sumar = function(a,b){
    return a + b;
}
*/

const sumar = (a,b) => {
    let c = a + b;
    console.log(c);
}

const dobleDe = (a) => a*2;

const prtSaludo = () => console.log("HOLAAAAAAAAAA!");

let opt1 = 5, opt2 = 6;
let resultado = sumar(opt1,opt2);

//console.log('La de ' + opt1 + ' y ' + opt2 + ' es: ' + resultado);
console.log(`La suma de ${opt1} más ${opt2} es ${resultado}`); // Template string (ES6)

console.log(`El doble de ${6} es ${dobleDe(6)}`);

prtSaludo();

const getPersona = () => ({nombre: 'Hernan', edad: 32});
console.log(getPersona());

//----------------------------
// Variables y tipos de datos
//----------------------------

// 1) Tipo primitivos (number, boolean, string, undefined, null)
// 2) Tipo Objeto (array, object, funtion) -> Copia por referencia

// Tipo array
var as = [1,2,3];
var bs = as;
as[0] = 11;
console.log(as);
console.log(bs);

// Tipo objeto
var as = {x:1};
var bs = as;
as.x = 11;
console.log(as);
console.log(bs);

var fechaObj  = {f: '20/05/2020', usuario: 'Hernan'};

function agregarHoraAFecha(fobj)
{
    var clave = 'usuario';
    fobj[clave] = fobj[clave] + ' 11:36:59'; //Notacion corchete
    //fobj.f = fobj.f + ' 11:36:59'; //Notacion punto
    console.log(fobj);
}

agregarHoraAFecha(fechaObj);

//-------------------------------------------------------------------------
// BOM (Browser Object Model):window y DOM (Document Object Model):document
//-------------------------------------------------------------------------

// Acceso al BOM
console.log('h', window.innerHeight);
console.log('w', window.innerWidth);

// Acceso al DOM
console.log(window.document.getElementById('titulo'));
console.log(window.document.getElementsByTagName('h1')[0]);
console.log(window.document.getElementsByClassName('titulo')[0]);

var titulo = document.getElementById('titulo');
titulo.innerHTML = 'Lo cambio';

// Acceso avanzando al DOM

var parrafo = document.createElement('p');
parrafo.innerHTML = "Esto es un parrafo.";

var body = document.getElementsByTagName('body')[0];
body.appendChild(parrafo);

//----------------------------------------------------------------------
// Metodos nuevos para acceder a los elementos. 
// querySelector encuentra el primer elemento. Accede por id, clase y etiqueta.
// querySelectorAll encuentra todos los elementos.

console.log(document.querySelector('#titulo'))
console.log(document.querySelector('.titulo'))
console.log(document.querySelector('h1'))

console.log(document.querySelectorAll('.titulo'))
console.log(document.querySelectorAll('h1'))