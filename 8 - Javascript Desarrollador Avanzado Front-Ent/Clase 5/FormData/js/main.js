console.log('Form Data')

function repreFormData(data){
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
    repreFormData(data)
})