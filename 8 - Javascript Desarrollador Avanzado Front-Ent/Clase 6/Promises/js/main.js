console.log('Promesas')

const retardo = (ms, mensaje) => new Promise(resolve => setTimeout(resolve, ms, mensaje))

/*
console.log('Inicio retardo 2 seg')
retardo(2000, 'Fin retardo 2 seg')
.then(console.log)  //Mensaje => console.log(mensaje)

console.log('Inicio retardo 4 seg')
retardo(4000, 'Fin retardo 4 seg')
.then(console.log)

console.log('Inicio retardo 5 seg')
retardo(5000, 'Fin retardo 5 seg')
.then(console.log)
*/
const retardos = async () => {
    console.log(await retardo(2000, 'Fin retardo 2 seg'))
    console.log(await retardo(3000, 'Fin retardo 3 seg'))
    console.log(await retardo(4000, 'Fin retardo 4 seg'))
}

//console.log('Inicio de los retardo')
//retardos()

/*
Sirve para pedir recursos de distintos origenes pero toma el primero que llegue y los demas los ignora
Promise.race([
    retardo(6000, 'Fin retardo 6 seg'),
    retardo(2000, 'Fin retardo 2 seg'),
    retardo(4000, 'Fin retardo 4 seg')
])
.then(console.log)
.catch(console.log)
*/

console.log(new Date().toLocaleString())
Promise.all([
    retardo(6000, 'Fin retardo 6 seg'),
    retardo(2000, 'Fin retardo 2 seg'),
    retardo(4000, 'Fin retardo 4 seg')
])
.then(rta => console.log(rta, new Date().toLocaleString()))
.catch(console.log)