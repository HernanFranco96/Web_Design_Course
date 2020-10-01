import React, { Component } from 'react';
import PropTypes from 'prop-types';

class Decrementador extends Component {
   constructor(props) {
      super(props);
      this.state = {  }
   }
   render() { 
      return (<button onClick={()=>{this.props.decrementar()}}>
         Decrementar
      </button>);
   }
}

Decrementador.propTypes = {
   decrementar : PropTypes.func.isRequired
}

export default Decrementador;