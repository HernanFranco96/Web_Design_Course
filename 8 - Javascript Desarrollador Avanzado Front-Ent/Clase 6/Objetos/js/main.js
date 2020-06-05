console.log('Objetos')

//-------------------------------------
// Objetos: 3 formas de construirlos
// 1) Forma literal
// 2) function create de Object
// 3) functiones constructoras (fabrica de objetos o operador new)


/*
// 1) Forma literal
let a = {nombre: 'Juan'}
console.log(a.hasOwnProperty('nombre'))
console.log(a.hasOwnProperty('edad'))

// 2) function create do object
let prototipo = {
    saludo: function(){
        console.log('Hola')
    }
}
let b = Object.create(prototipo)
console.log(prototipo.isPrototypeOf(b))
*/

//-------------------------------------------------------------------------------
// Configuraciona avanzada de las propiedades de un objeto usando Objecto.create
//-------------------------------------------------------------------------------
/*
let prototipo3 = Object.create(null, {
    saludo: {
        value: function(){
            console.log('HOLAAA!!!')
        }
    }
})

let e = Object.create(prototipo3,{
    x: {
        value: 1,
        writable: true, //Doy permisos de escritura
        configurable: true, //Doy permiso de borrar/no borrar
        enumerable: true //Permite enumerar y recorrer las propiedades de un objeto
    },
    y: {
        value: 2
    }
})
//console.log(e)
//console.log(e.x)
//e.x = 11
for(let key in e){
    console.log(key)
}
*/
//--------------------------
// 3) Funcion constructoras
//--------------------------

function foo(){
    console.log('Soy foo')
}
foo.x = true
foo()
console.log(foo.x) // -> Una funcion en JS es un objeto (_Proto_)

//Caracteristica 1: Las funciones de JS son variadicas
function sumar(a,b){
    return (a||0) + (b||0)
}
console.log(sumar(2,3,4))