console.log('Ajax Anidado')

const url = 'https://5eda3b9e98b7f500160dc358.mockapi.io/Noticia/'

//-----------------------------------------------------
// Petición Asyncronica por Ajax no anidado (desorden)
//-----------------------------------------------------

function getNoticia(id){
    let xhr = new XMLHttpRequest
    xhr.open('get',url+id)
    xhr.addEventListener('load', () => {
        if(xhr.status == 200){
            let respuesta = JSON.parse(xhr.response)
            console.log(respuesta)
        }
    })
    xhr.send()
}

/*
console.log('Inicio de peticiones')
getNoticia(1)
getNoticia(2)
getNoticia(3)
getNoticia(4)
console.log('Otras tareas...')
*/

//--------------------------------------------------
// Petición Asyncronica por Ajax anidado (ordenado)
//--------------------------------------------------

function getNoticiacb(id, cb){
    let xhr = new XMLHttpRequest
    xhr.open('get',url+id)
    xhr.addEventListener('load', () => {
        if(xhr.status == 200){
            let respuesta = JSON.parse(xhr.response)
            console.log(respuesta)
            if(cb) cb(respuesta)
        }
    })
    xhr.send()
}

// Infierno de Callbacks. CALLBACK HELL
/*
getNoticiacb(1, () => {
    getNoticiacb(2, () => {
        getNoticiacb(3, () => {
            getNoticiacb(4, () => {
                getNoticiacb(5, () => {
                    getNoticiacb(6, () => {
                        getNoticiacb(7, () => {
                            getNoticiacb(8, () => {
                                getNoticiacb(9, () => {
                                    getNoticiacb(10, () => {
                                        getNoticiacb(11, () => {
                
                                        })
                                    })
                                })
                            })
                        })
                    })
                })
            })
        })
    })
})
*/

//-----------------------------------------------------------------
// Petición Asyncronica por Ajax anidado usando Promise (ordenado)
//-----------------------------------------------------------------

function getNoticiaPromise(id, debug){
    return new Promise((resolve, reject) => {
        let xhr = new XMLHttpRequest
        xhr.open('get',url+id)
        xhr.addEventListener('load', () => {
            if(xhr.status == 200){
                let respuesta = JSON.parse(xhr.response)
                if(debug) console.log(respuesta)
                resolve(respuesta)
            }else{
                let error = {
                    type: 'Error status',
                    code: xhr.status
                }
                reject(error)
            }
        })
        xhr.addEventListener('error', e => {
            let error = {
                type: 'Error Ajax',
                code: e
            }
            reject(error)
        })
        xhr.send()
    })
}

//---------------------------------------------
// Consumiendo promesas mediante then y catch 
//---------------------------------------------
/*
function getNoticias(){
    //Este callback va a ser llamado cuando la promesa se cumpla
    getNoticiaPromise(1, true)
    .then(() => getNoticiaPromise(2, true))
    .then(() => getNoticiaPromise(3, true))
    .then(() => getNoticiaPromise(4, true))
    .then(() => getNoticiaPromise(5, true))
    .then(() => getNoticiaPromise(6, true))
    .then(() => getNoticiaPromise(7, true))
    .then(() => getNoticiaPromise(8, true))
    .then(() => getNoticiaPromise(9, true))
    .then(() => getNoticiaPromise(10, true))
    .then(() => {})
    .catch(error => console.log('Error Promise!!', error))
}

getNoticias()
*/

//-------------------------------------------
// Consumiendo promesas mediante async await 
//-------------------------------------------
/*
async function getNoticias(){
    try
    {
        await getNoticiaPromise(1, true)
        await getNoticiaPromise(2, true)
        await getNoticiaPromise(3, true)
        await getNoticiaPromise(4, true)
        await getNoticiaPromise(5, true)
        await getNoticiaPromise(6, true)
        await getNoticiaPromise(7, true)
        await getNoticiaPromise(8, true)
        await getNoticiaPromise(9, true)
        await getNoticiaPromise(10, true)
    }
    catch(error)
    {
        console.log('Error Promise!!', error)
    }
}
*/

/*
async function getNoticias(){
    //debug -> false
    try
    {
        for(let i=1;i<=10;i++)
        {
            let respuesta = await getNoticiaPromise(i)
            console.log(respuesta)
        }
    }
    catch(error)
    {
        console.log('Error Promise!!', error)
    }
}
*/

function getNoticiaFetch(id ,debug){
    return fetch(url+id)
    .then(respuesta => respuesta.json())
    .then(noticia => {
        if(debug) console.log(noticia)
        return noticia
    })
}

async function getNoticias(){
    try{
        for(let i=1;i<=6;i++)
        {
            let noticia = await getNoticiaFetch(i,false)
            console.log(noticia)
        }
    }catch(error){
        console.log('Error fetch', error)
    }

}

console.log('Inicio peticiones...')
getNoticias()
console.log('Otras tareas...')