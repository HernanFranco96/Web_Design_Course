import React, { Component } from 'react';
import PropTypes from 'prop-types';

class Contador extends Component{
   constructor(props){
      super(props);
      this.state = { }
   }
   render(){
      return(<h1>Contador:{this.props.valor}</h1>);
   }
}

Contador.propTypes = {
   valor : PropTypes.number.isRequired
}

export default Contador;