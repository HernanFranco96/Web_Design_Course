import React from 'react';
import 'bootstrap/dist/css/bootstrap.css';

class ListaDeTareas extends React.Component{
   constructor(props){
      super(props);
      this.state = {
         tareaActual : '',
         tareas:[
            {nombre : 'Cocinar'},
            {nombre : 'Limpiar'}
         ]
      }
   }

   clickBoton(){
      /*let arrtareas = this.state.tareas;
      arrtareas.push({nombre: this.state.tareaActual});
      this.setState({tareas: arrtareas, tareaActual:''});*/
      this.setState({tareas:[...this.state.tareas,{nombre:this.state.tareaActual}],tareaActual:''})
   }

   tareaChange(event){
      this.setState({tareaActual : event.target.value})
   }

   render(){
      return (<div>
         <ul className="list-group">
            {this.state.tareas.map( (item) => {
               return <li key={item.nombre} className="list-group-item">{item.nombre}</li>
            })}
         </ul>

         <input className="form-control" type="text" placeholder="Ingrese tarea" 
         value={this.state.tareaActual}
         onChange={this.tareaChange.bind(this)}
         />

         <button 
         className="w-25 mt-5 mx-auto rounded-pill btn btn-primary btn-block"
         onClick={this.clickBoton.bind(this)}>
            Agregar Elemento
         </button>
      </div>)
   }
}

export default ListaDeTareas;