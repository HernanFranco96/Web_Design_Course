console.log('Drag And Drop')

let drop = document.getElementById('drop')

//Ingresamos al DROP
drop.addEventListener('dragenter', e => {
    e.preventDefault()
    console.log('Estoy adentro del DROP')    
})

//Abandono el DROP
drop.addEventListener('dragleave', e => {
    e.preventDefault()
    console.log('Estoy afuera del DROP')    
})

//Estoy encima del DROP
drop.addEventListener('dragover', e => {
    e.preventDefault()
    console.log('Estoy encima del DROP')    
})

//Soltamos recurso
drop.addEventListener('drop', e => {
    e.preventDefault()
    console.log('Solté el recurso')   

    // Pedir multiples imagenes
    let archivos = Array.from(e.dataTransfer.files)
    console.log(archivos)
    archivos.forEach(archivo => {
        //console.log(archivo)
        input.file[0].name = archivo.name
        cargarImagen(archivo.name)
    });

    /* Pedir una imagen */
    //let archivo = e.dataTransfer.files[0].name
    //cargarImagen(archivo)
})

let input = document.querySelector('input')
input.addEventListener('change', () => {
    console.log(input.files)

    let archivos = Array.from(input.files)
    archivos.forEach(archivo => {
        //console.log(archivo)
        input.files[0].name = archivo.name
        cargarImagen(archivo.name)
    });

     /* Pedir una imagen */
    //let archivo = input.files[0].name
    //cargarImagen(archivo)
})

function cargarImagen(archivo){
    let img = document.querySelector('img')
    let progress = document.querySelector('progress')
    let span = document.querySelector('span')

    progress.value = 0
    span.innerText = '0%'
    img.src = ''

    let xhr = new XMLHttpRequest
    let urlSincCache = archivo + '?' + Date.now()
    xhr.open('get', urlSincCache)

    //Decodificamos el archivo binario
    xhr.responseType = 'blob' 
    xhr.addEventListener('load', () => {
        if(xhr.status == 200){
            let imagenBlob = xhr.response

            let url = URL.createObjectURL(imagenBlob)
            //console.log(url)

            /*
            let img = document.createElement('img')
            img.src = url
            document.body.appendChild(img)
            */
            img.src = url
        }
    })

    xhr.addEventListener('progress', e => {
        console.log('Descargando...')
        console.log(e)

        if(e.lengthComputable){
            let porcentaje = ((e.loaded * 100) / e.total)
            console.log(porcentaje + '%')
            progress.value = porcentaje
            span.innerText = porcentaje + '%' + 'de ' + archivo
        }
    })

    xhr.send()
}