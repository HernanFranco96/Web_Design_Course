import React from 'react';
import logo from './logo.svg';
import './App.css';
import Contador from './containers/ContadorContainer';
import Incrementador from './containers/incrementadorContainer';
import Decrementador from './containers/decrementarContainer';
import globalStore from './stores/store';
import { Provider } from 'react-redux';

function App() {
  return (
    <Provider store={globalStore}>
      <div className="App">
        <Contador/>
        <div>
          <Incrementador />
          <Decrementador />
        </div>
      </div>
    </Provider>
  );
}

export default App;
