
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

xhr.addEventListener('readystatechange', () => { //Obtenemos el estado de la respuesta
	console.log('readystatechange: ', xhr.readyState)

	if(xhr.readyState == 4){
		console.log('respuesta: ', xhr.response)
	}
})

xhr.open('get','texto.txt') // Configura la instancia

xhr.send() // Enviamos la peticion
/*
console.log(xhr.readyState)
console.log('respuesta: ', xhr.response) // Mostramos el mensaje

setTimeout( () =>{
	console.log(xhr.readyState)
	console.log('respuesta: ', xhr.response)
}, 100)
*/

// 0 Instancia creada
// 1 Instancia configurada. Sabe con que metodo va a trabajar y que recurso
// 2 Proceso de intercambio entre cliente y servidor
// 3 Proceso de transferencia de informacion
// 4 Termino la transferencia ya sea por bien o por mal