import Incrementador from '../componentes/Incrementador';
import {connect} from 'react-redux';
import {actIncrementar} from '../action-creators/action-creators';

//dispatch para la accion al reducer
function mapDispatchToProps(dispatch){
   return{
      incrementar : ()=>{dispatch(actIncrementar(1))}
   }
}

export default connect(null,mapDispatchToProps)(Incrementador);