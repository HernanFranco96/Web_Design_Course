import React from 'react';
import logo from './logo.svg';
import Cabecera from './components/Cabecera.js';
import PieDePagina from './components/PieDePagina.js';
import ListaDeTareas from './components/ListaDeTareas.js';

function App() {
  return (
    <div>
      <Cabecera titulo="React's toDo LiST dEmo"></Cabecera>
      <div className="container">
        <ListaDeTareas/>
      </div>
      <PieDePagina texto="Texto en footer" autor="Hernan Franco" año="1996"></PieDePagina>
    </div>
  );
}

export default App;
