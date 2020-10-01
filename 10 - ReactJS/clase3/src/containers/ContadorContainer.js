import Contador from '../componentes/Contador';
import {connect} from 'react-redux';

function mapStateToProps(state){
   return{
      valor : state.contador
   }
}

export default connect(mapStateToProps)(Contador);