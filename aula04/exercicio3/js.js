function informarIMC () {
    var magreza; 

    var altura = parseFloat(document.getElementById(altura).value);
    var peso = parseFloat(document.getElementById(peso).value);

    var soma = altura*altura
    var soma2 = peso/soma

    if (soma< 18.5) {
        document.getElementById("imcExibido").innerText = "IMC: " + soma;
    } else if (soma>= 18.5 && soma<24.9 ) {
        
    } else if (soma>= 25 && soma<29.9) {
        
    } else if (soma>= 30 && soma<=39.9) {
        
    } else {
        
    }
    
}