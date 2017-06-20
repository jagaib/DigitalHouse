function cantidadDeMesesConGanancia(unPeriodo) {
  var cantidad = 0;
  for (var i = 0; i < unPeriodo.length; i++) {
    if(unPeriodo[i] > 0){
    cantidad++;
    }
  }
  return cantidad;
}



function cantidadDeMesesConPerdida(unPeriodo) {
  var cantidad = 0;
  for (var i = 0; i < unPeriodo.length; i++) {
    if(unPeriodo[i] < 0){
    cantidad++;
    }
  }
  return cantidad;
}


function saldosDeMesesConGanancia(unPeriodo) {
  var saldos = [];
  for (var i = 0; i < unPeriodo.length; i++) {
    if (unPeriodo[i] > 0 ) { saldos.push(unPeriodo[i]) }
  }
  return saldos;
}


function paloDeTruco(palo) {
  var cartas = [];
  for (var i = 0; i < 10 ; i++) {
    if (i < 7 ) { cartas.push((i+1)+" de "+palo) ;
				} 
  else {
     cartas.push((i+3)+ " de "+palo) ;
  		}
  }
  return cartas;
}
