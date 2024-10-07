
function funcionApretar(elemento){
    var valorElem = elemento.innerHTML
    
    

    elemento.classList.toggle("sombraInt");
  
    
}

function añadirValores(elemento){
    var valorElem = elemento.innerHTML
    /*  var nodoPadre = document.getElementsByClassName("pantalla");
    var parrafo = document.createElement("p");
    var texto = document.createTextNode(valorElem);
    parrafo.appendChild(texto);
    nodoPadre.appendChild(parrafo); */
    switch (valorElem) {
        case "/":
            
            console.log(valorElem)
            break;
        case "C":
        
            console.log(valorElem)
            break;
        case "%":
        
            console.log(valorElem)
            break;
        case "&laquo":
        
            console.log(valorElem)
            break;
        case "x":
    
            console.log(valorElem)
            break;
        case "-":

            console.log(valorElem)
            break;
        
        case "=":

            console.log(valorElem)
            break;
        case "()":

            console.log(valorElem)
            break;

        default:
            console.log(valorElem)
            break;
    }
}