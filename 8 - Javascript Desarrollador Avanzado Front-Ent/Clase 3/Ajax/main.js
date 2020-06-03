
//-----------------------------------
//         CODIGO SINCRONICO 
//-----------------------------------

/*
console.log('Inicio')

console.log(1); for(let i=0;i<1e9;i++); //Retardo
console.log(2); for(let i=0;i<1e9;i++);
console.log(3); for(let i=0;i<1e9;i++);
console.log(4); for(let i=0;i<1e9;i++);
console.log('Otras tareas...')
*/

//-----------------------------------
//         CODIGO ASINCRONICO 
//-----------------------------------
/**
console.log('Inicio de tareas 1')
console.log('Tarea 1 - paso 1')
setTimeout(() => {
	console.log('Tarea 1 - paso 2')
	setTimeout(() => {
		console.log('Tarea 1 - paso 3')
		setTimeout(() => {
			console.log('Tarea 1 - paso 4')
		}, 2000)
	}, 2000)
}, 2000)
console.log('Otras tareas...')

console.log('Inicio de tareas 2')
console.log('Tarea 2 - paso 1')
setTimeout(() => {
	console.log('Tarea 2 - paso 2')
	setTimeout(() => {
		console.log('Tarea 2 - paso 3')
		setTimeout(() => {
			console.log('Tarea 2 - paso 4')
		}, 4000)
	}, 4000)
}, 4000)

console.log('Otras tareas...')
*/

/**
* ------------------------------------
* AJAX (Asynchronous JavaScript And XML)
* ------------------------------------
*/

let xhr = new XMLHttpRequest()
console.log(xhr.readyState) //Es una variable que nos va a indicar en que estado esta respuesta
/*
xhr.addEventListener('readystatechange', () => { //Obtenemos el estado de la respuesta
	console.log('readystatechange: ', xhr.readyState)

	if(xhr.readyState == 2){
		let headers = xhr.getAllResponseHeaders() //Obtenemos todos los headers
		//console.log(headers)
		let tipo = xhr.getResponseHeader('content-type') //Obtenemos un unico header
		console.log(tipo)

		//if(tipo != 'text/plain') Da error porque me llega un recurso text/plain
		if(!tipo.includes('text/plain')) // Sino incluye text/plain aborta
		{
			xhr.abort()
		}
	}

	if(xhr.readyState == 4){
		if(xhr.status == 200){
			console.log('Respuesta: ', xhr.response)
		}else{
			console.log('Error status: ', xhr.status)
		}
	}
})
*/
xhr.addEventListener('load', () => {
	if(xhr.status == 200){
		console.log('Respuesta: ', xhr.response)
	}else{
		console.error("Error! status: ", xhr.status)
	}
})

xhr.addEventListener('timeout', () => {
	console.log('El pedido se ha excedido de tiempo')
})

xhr.open('get','texto.txt') // Configura la instancia
xhr.timeout = 0
xhr.send() // Enviamos la peticion
/*
console.log(xhr.readyState)
console.log('respuesta: ', xhr.response) // Mostramos el mensaje

setTimeout( () =>{
	console.log(xhr.readyState)
	console.log('respuesta: ', xhr.response)
}, 100)
*/

// readyState
// 0 Instancia creada
// 1 Instancia esta configurada
// 2 Intercambio de header entre cliente y servidor
// 3 Transferencia de informacion
// 4 Termino la transferencia ya sea por bien o por mal

// state
// 200 -> Transferencia correcta
// Otros -> error

