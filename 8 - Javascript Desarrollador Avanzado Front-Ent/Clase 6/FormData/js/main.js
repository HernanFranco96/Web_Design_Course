console.log('Objeto Form Data')

function representarContenidoFormData(data){
    //console.log(data)
    let values = data.values()
    let keys = data.keys()

    do{
        let key = keys.next()
        let value = values.next()
        if(key.done || value.done) break
        console.log(key.value, '->', value.value)
    }while(true)
}

//-----------------------------------------
// Utilizacion de FormData con formularios
//-----------------------------------------

let form = document.querySelector('form')
form.addEventListener('submit', e => {
    e.preventDefault()

    let data = new FormData(form)
    representarContenidoFormData(data)
})

//------------------------------------------------------------
// Utilizacion de FormData con datos cargados en forma manual
//------------------------------------------------------------

document.getElementById('btn-crear').addEventListener('click', () =>{
    let data = new FormData
    for(let i=0;i<10;i++){
        //Permite sumar claves y valores al formdata
        data.append(`Param->${i}`,i)
    }
    representarContenidoFormData(data)
})

//-------------------------------------
// Implementación de FormData con Ajax
//-------------------------------------

let archivos = [
    'archivo1.jpg',
    'archivo2.jpg',
    'archivo3.jpg',
    'archivo4.jpg',
    'archivo5.jpg',
    'archivo6.jpg',
    'archivo7.jpg',
    'archivo8.jpg',
]

let data = new FormData
for(let i=0;i<archivos.length;i++){
    //Permite sumar claves y valores al formdata
    data.append(`Imagen->${i}`,archivos[i])
}
//representarContenidoFormData(data)

// Para enviar datos se usa post
// Envio del FormData a través de POST Ajax
let xhr = new XMLHttpRequest
xhr.open('post','url')
//xhr.setRequestHeader('content-type','aplication/json')
xhr.send()