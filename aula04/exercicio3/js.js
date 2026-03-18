function informarIMC () {
 
    var altura = document.getElementById("altura").value;
    var peso = document.getElementById("peso").value;

    if (peso == "" || altura == "") {

    }

    else {

        var p = parseFloat(peso);
        var a = parseFloat(altura);
        var soma = p/(a*a);

        if (soma< 18.5) {
            document.getElementById("imcExibido").innerText = "IMC: " +  "Magreza: " + soma.toFixed(3);
        } else if (soma>= 18.5 && soma<24.9 ) {
            document.getElementById("imcExibido").innerText = "IMC: " + "Normal: " + soma.toFixed(3);
        } else if (soma>= 25 && soma<29.9) {
            document.getElementById("imcExibido").innerText = "IMC: " +  "Sobrepeso: " + soma.toFixed(3);
        } else if (soma>= 30 && soma<=39.9) {
            document.getElementById("imcExibido").innerText = "IMC: " + "Obesidade: " + soma.toFixed(3);
        } else {
            document.getElementById("imcExibido").innerText = "IMC: " + "Obesidade Grave: " + soma.toFixed(3);
        }

    }
    
}