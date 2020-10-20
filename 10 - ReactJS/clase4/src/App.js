import React from 'react';
import logo from './logo.svg';
import './App.css';
import PedidosList from './components/PedidosList';
import PedidoAdd from './components/PedidoAdd';
import 'bootstrap/dist/css/bootstrap.css';
import {BrowserRouter, Link, Switch, Route} from 'react-router-dom';

const Home = ()=>{
  return <h1>La Home de mi pagina</h1>
}

function App() {
  return (
    <BrowserRouter>
      <div className="App">
        <header className="jumbotron text-center mb-0">
          <h1>React Clase 4</h1>
          <h2>Pedidos Ya!</h2>
        </header>

        <nav className="navbar navbar-expand bg-dark">
          <ul className="navbar-nav nav">
            <li className="nav-item">
              <Link className="nav-link" to="/list">Lista Pedidos</Link>
            </li>
            <li className="nav-item">
              <Link className="nav-link" to="/new">Nuevo Pedido</Link>
            </li>
          </ul>
        </nav>

        <main className="container mt.3">
          <Switch>
            <Route path="/" component={Home} exact/>
            <Route path="/list" component={PedidosList} />
            <Route path="/new" component={PedidoAdd} />
          </Switch>
        </main>
      </div>
    </BrowserRouter>
  );
}

export default App;
