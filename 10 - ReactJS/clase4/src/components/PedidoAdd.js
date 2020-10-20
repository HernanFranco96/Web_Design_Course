import React, { Component } from 'react';
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.css'
import { useHistory } from 'react-router-dom';

class PedidoAdd extends Component{
    constructor(props){
        super(props)
        this.state = {
            id:null,
            destinatario:"",
            pedido:"",
            fecha: new Date()
        }
    }

    handleSubmit(){
        axios.post("http://localhost:3001/pedidos", this.state).then( ()=>{
            window.location = "/list"
        })
    }

    render() {
        return (<form>
            Destinatario:
            <input text="text" className="form-control" onChage={(e) =>{
                this.setState({destinatario:e.target.value})
            }}/>
            Pedido:
            <input text="text" className="form-control" onChage={(e) =>{
                this.setState({pedido:e.target.value})
            }}/>
            Fecha:
            <input text="text" className="form-control" onChage={(e) =>{
                this.setState({fecha:e.target.value})
            }}/>

            <button type="button" className="btn btn-primary btn-block m-3"
                onClick={this.handleSubmit.bind(this)}>
                Enviar Datos
            </button>

            {JSON.stringify(this.state)}
        </form>);
    }
}

export default PedidoAdd;