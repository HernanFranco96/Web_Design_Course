import Decrementador from '../componentes/Decrementador';
import {connect} from 'react-redux';
import {actDecrementar} from '../action-creators/action-creators';


//dispatch para la accion al reducer
function mapDispatchToProps(dispatch){
   return{
      decrementar : ()=>{dispatch(actDecrementar(1))}
   }
}

export default connect(null,mapDispatchToProps)(Decrementador);