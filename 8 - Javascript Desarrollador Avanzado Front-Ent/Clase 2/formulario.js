console.log('Formularios en JS');

// -------------------------------------------------------------
// Evento submit y la cancelacion del evento automatico del form
// -------------------------------------------------------------

let form = document.getElementById('formulario');
let btn = document.getElementById('btn');

/*
btn.addEventListener('click', e =>{
    e.preventDefault();
    console.log('Click!');
})
*/

// --------------------------------------
// Introduccion a la API web HTMLElement
// --------------------------------------

/* Habilita el cartel automatico de validacion HTML
form.addEventListener('submit', e => {
    e.preventDefault();
    console.log('Evento Submit');
})

form.addEventListener('click', e => {
    e.preventDefault();
    console.log('Evento Submit', input.checkValidity()); 
})
*/
let input = document.querySelector('input');

// --------------------------------------------------------------------------
// Validacion customizada (sin required) Manejando carteles validacion HTML5
// --------------------------------------------------------------------------

input.addEventListener('input', () =>{
    let dato = input.value;
    let longitud = dato.length;
    if(longitud <= 3)
        input.setCustomValidity('Debe tener mas de 3 caracteres.');
    else
        input.setCustomValidity('');
    //console.log('Dato desde input: ', dato, longitud);
})

form.addEventListener('submit', e =>{
    e.preventDefault();
    let dato = input.value;
    let longitud = dato.length;
    if(longitud <= 3)
        input.setCustomValidity('Debe tener mas de 3 caracteres.');
    else
        input.setCustomValidity('');
    console.log('Dato desde submit: ', dato, longitud);
})