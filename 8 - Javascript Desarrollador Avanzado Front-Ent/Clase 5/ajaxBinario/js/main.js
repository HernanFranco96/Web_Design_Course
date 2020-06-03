console.log('Ajax Binario')

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
            span.innerText = porcentaje + '%'
        }
    })

    xhr.send()
}

let form = document.querySelector('form')
form.addEventListener('submit', e => {
    e.preventDefault()
    console.dir(form[0])
    //console.log(form[0].value)

    // Pedir multiples imagenes
    let archivos = Array.from(form[0].files)
    console.log(archivos)
    archivos.forEach(archivo => {
        console.log(archivo)
        cargarImagen(archivo.name)
    });
})


