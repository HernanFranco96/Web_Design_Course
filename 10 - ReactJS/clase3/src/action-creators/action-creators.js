import * as tipo from '../actions/actions';

export function actIncrementar(cantidad){
   return{
      type: tipo.ACT_INCREMENTAR,
      value: cantidad
   }
}

export function actDecrementar(cantidad){
   return{
      type: tipo.ACT_DECREMENTAR,
      value: cantidad
   }
}