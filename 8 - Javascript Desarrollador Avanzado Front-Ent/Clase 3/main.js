console.log('Formularios en JS')

let form = document.querySelector('form')
let input = document.querySelector('input')

input.setCustomValidityJSS = function(mensaje){
	let div = document.querySelector('div')

	div.innerHTML = mensaje
	div.style.display = mensaje ? 'block':'none'
}

function validarInputConRegExp(dato){

	let regExpCampoNombre = /^[A-Z][a-z]{2,14}$/ // Validamos que sea entre 3-15 caracteres
	//let regExpCampoMail = /^\w+@\w+\.\w+$/
	//let regExpCampoGmail = /^\w+@(gmail|hotmail).\w{2,3}(\.\w{2})?$/

	/*if(!regExpCampoNombre.test(dato)){
		input.setCustomValidityJSS('Campo nombre no valido')
		return null
	}
	if(!regExpCampoMail.test(dato)){
		input.setCustomValidityJSS('Campo mail no valido')
		return null
	}*/
	if(!regExpCampoNombre.test(dato)){
		let long = dato.length
		let mensaje = "Campo nombre no valido"
		if(long == 0) mensaje = 'Este campo es obligatorio'
		else if(long < 3) mensaje = 'Este campo debe tener al menos 3 caracteres'
		else if(long > 15) mensaje = 'Este campo debe tener maximo 15 caracteres'
		input.setCustomValidityJSS(mensaje)
		return null
	}
	else{
		input.setCustomValidityJSS(null)
		return dato
	}
}

input.addEventListener('input', () =>{
	validarInputConRegExp(input.value)
})

form.addEventListener('submit', e => {
	e.preventDefault() //Es para que no se recargue el navegador.

	let dato = validarInputConRegExp(input.value)
	if(dato){
		console.log('Dato enviado: ', '['+dato+']')
	}
})

/*-----------------------*/
/* Expresiones regulares */
/* https://regex101.com */

//let miRegExp = new RegExp('') Forma objeto
let miMensaje = 'Holabc'
let miRegExp = /abc/

console.log(miRegExp.test(miMensaje))	

// () Se valida dentro del parentesis
// \ Tiene que estar si o si
// {2,5} o + indica un rango
// $ Dice que termina de esa forma
// + Valida
// │ Nos permite elegir un patron u otro 
// [- - ] Nos permite hacer condiciones
// ^ Caracter de posicion inicial
// ^[] Lo contratio a lo que le sigue
// w Todos los caracteres a-z A-Z 0-9 _
// + Uno o mas de ese caracter
// ? opcional