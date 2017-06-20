function masMenos(nArray) {
    var afracciones = [];
    var ntotal = nArray.length;
    var npos = 0;
    var ncero = 0;
    var nneg = 0;
    
    for (var i = 0; i < nArray.length; i++) {
     if ( nArray[i] > 0 ) {
         npos += 1;
     } else {
         if ( nArray[i] === 0 ) {
             ncero += 1;
         } else { 
             nneg += 1;
         }
     }
  }
 afracciones.push(npos/ntotal);
 afracciones.push(ncero/ntotal);
 afracciones.push(nneg/ntotal);
 return afracciones ;
}



function escalera(nEscalones) {
    var nuevaEsc = [];
    for (var i=1;i<=nEscalones;i++) {
        nuevaEsc.push(" ".repeat(nEscalones-i)+"#".repeat(i));
    }
    return nuevaEsc;
}


function seAbre(allegadas, nAlumnoMin) {
    var nPuntuales = 0;
    
    for (var i = 0; i < allegadas.length; i++) {
     if ( allegadas[i] <= 0 ) {
         nPuntuales += 1;
     } 
    }
    return nPuntuales >= nAlumnoMin;
}

function aperturas(aIngAnterior , nAlumnoMin) {
    var lAbrioDias = [];
    
       for (var i = 0; i < aIngAnterior.length; i++) {
     if ( aIngAnterior[i].length > 0 ) {
         lAbrioDias.push(seAbre(aIngAnterior[i],nAlumnoMin));
     } 
    }
    return lAbrioDias; 
}



function alturaArbolUtopico(nCiclos) {
    var nAltura = 0;
   
    for (var i=0; i <= nCiclos; i++){
        if (i%2===0) {
          nAltura += 1; 
        } else {
            nAltura = nAltura*2
        }
    }
    return nAltura
}



function alturaArbolUtopico(nCiclos) {
    var nAltura = 0;
   
    for (var i=0; i <= nCiclos; i++){
        if (i%2===0) {
          nAltura += 1; 
        } else {
            nAltura = nAltura*2
        }
    }
    return nAltura
}


function factorial(nFactor) {
    var nFactorial = 1;
    for (var i=1;i<=nFactor;i++) {
        nFactorial *= i;
    }
    return nFactorial;
    }