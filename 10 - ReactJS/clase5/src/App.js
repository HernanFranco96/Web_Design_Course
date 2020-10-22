import React, { Component } from 'react';
import './App.css';
import {Transition} from 'react-transition-group';

const estiloDefecto = {
  opacity:1,
  transition: 'opacity 1000ms ease-in-out',
  padding: '3em'
}

const estiloTransiciones = {
  entering: { opacity: 0.5 },
  entered: { opacity: 1 },
  exiting: { opacity: 0.5 },
  exited: { opacity: 0 }
}

class App extends Component {
  constructor(props){
    super(props);
    this.state = { color:"red", bandera: true}
  }

  cambiarEstado(){
    this.setState({color: ((this.state.color==="red")  ? "green" : "red")})
    this.setState({bandera: !this.state.bandera})
  }

  render(){
    return (
      <div>
        <Transition in={this.state.bandera} timaout={1000}>
          {
            (cambio) => {
              return <div style={{...estiloDefecto,
                                  ...estiloTransiciones[cambio]}}>
                                      Componente Magico
                </div>
            }
          }
        </Transition>
        <div style={
          {
            padding: "3em",
            backgroundColor: this.state.color,
            transition: "background-color 1000ms linear"
          }
        }>
          Esto va a estar animado
        </div>
        <button onClick={this.cambiarEstado.bind(this)}>Cambiar Estado</button>
      </div>
      );
  }
}

export default App;
