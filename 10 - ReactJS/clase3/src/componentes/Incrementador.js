import React, { Component } from 'react';
import PropTypes from 'prop-types';

class Incrementador extends Component {
   constructor(props) {
      super(props);
      this.state = {  }
   }
   render() { 
      return (<button onClick={()=>{this.props.incrementar()}}>
         Incrementar
      </button>);
   }
}

Incrementador.propTypes = {
   incrementar : PropTypes.func.isRequired
}

export default Incrementador;