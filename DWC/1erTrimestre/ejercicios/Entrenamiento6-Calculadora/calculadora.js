
function funcionApretar(elemento){

    elemento.classList.toggle("sombraInt");
    
}

function añadirValores(elemento) {
    var valorElem = elemento.innerHTML.trim();  
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value;

    if(valorPantalla == 0 || valorPantalla == "NaN"){
        inputElement.value = valorElem;
    }else{
        inputElement.value += valorElem;
    }
    
    console.log(valorElem);
    
}
// intentar que funcionen las teclas
/*
document.addEventListener("keydown" , function(event){
    if (event.key = "C") {
        borrar()
    }
}) */
function igual() {
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value.trim();  // trim sirve para eliminar los espacios en blanco
    var valorPantallaCorregido = valorPantalla.replace(/x/g, "*");  
    
    var resultado = eval(valorPantallaCorregido);  
    inputElement.value = resultado;  
}

function botonC(){
    var inputElement = document.getElementById("pantalla");
    inputElement.value = 0;
}
function eliminarUltimoCaracter(){
    
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value.trim();
    if (valorPantalla != "0" && valorPantalla.length > 0) {
        inputElement.value = valorPantalla.slice(0, -1);  // Eliminar el último carácter
    }
    
}
   


