let btn = document.querySelector('button')
let contenidoCargado = false

btn.addEventListener('click', () => {
    let xhr = new XMLHttpRequest

    if(!contenidoCargado){
        xhr.open('get','plantilla.html')
    
        xhr.addEventListener('load', () => {
            if(xhr.status == 200){
                let plantilla = xhr.response
                console.log(plantilla)
    
                let div = document.createElement('div')
                div.innerHTML = plantilla
                //document.body.appendChild(div)
                let divContenido = document.getElementById('contenido')
                divContenido.appendChild(div);

                contenidoCargado = true
            }
        })
    }else{
        console.error('Error! status: ',xhr.status)
    }

    xhr.send()
})