document.addEventListener("keydown", function(event){
    var key = event.key;
    var inputElement = document.getElementById("pantalla");

    // si es una tecla numérica o un operador
    if (!isNaN(key) || key === '+' || key === '-' || key === '*' || key === '/' || key === '.' || key === '(' || key === ')') {
        añadirTecla(key);
    }

    // enter para calcular el resultado
    if (key === 'Enter') {
        igual();
    }

    // C para borrar todo // la tecla "Backspace" para borrar el último carácter
    if (key === 'C' || key === 'c') {
        botonC();
    }
    // si apretas al Backspace se borra el último
    if (key === 'Backspace') {
        eliminarUltimoCaracter();
    }
});

// añadir numeros desde las teclas
function añadirTecla(tecla) {
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value;

    if (valorPantalla == 0 || valorPantalla == "NaN") {
        inputElement.value = tecla;
    } else {
        inputElement.value += tecla;
    }
}
// cuando aprietas a una tecla se le pone una sombra
function funcionApretar(elemento){

    elemento.classList.toggle("sombraInt");
    
}

function añadirValores(elemento) {
    var valorElem = elemento.innerHTML.trim();  // trim para eliminar los espacios en blanco
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value;

    if(valorPantalla == 0 || valorPantalla == "NaN"){
        inputElement.value = valorElem;
    }else{
        inputElement.value += valorElem;
    }
    
    console.log(valorElem);
    
}

function igual() {
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value.trim();  // trim sirve para eliminar los espacios en blanco
    var valorPantallaFinal = valorPantalla.replace(/x/g, "*");  
    // sustituyo la x por el * para que se pueda calcular las multiplicaciones
    
    var resultado = eval(valorPantallaFinal);  
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
   


