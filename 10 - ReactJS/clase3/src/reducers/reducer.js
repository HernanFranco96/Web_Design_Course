import * as tipos from '../actions/actions';

function elReducer(state, action){
   console.log("Recibi la accion " + action.type);
   let newState = state;
   switch(action.type){
      case tipos.ACT_INCREMENTAR :
         newState = {contador : state.contador + action.value}
         break;
      case tipos.ACT_DECREMENTAR :
         newState = {contador : state.contador - action.value}
         break;
   }
   return newState;
}

export default elReducer;