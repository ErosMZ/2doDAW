document.addEventListener("keydown", function(event){
    var key = event.key;
    var inputElement = document.getElementById("pantalla");

    // si es una tecla numérica o un operador
    if (!isNaN(key)|| key === "x" || key === '+' || key === '-' || key === '*' || key === '/' || key === '.' || key === '(' || key === ')' || key === '%') {
        añadirTecla(key);
    }

    // "enter" para calcular el resultado
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
    var arrayValorPantalla = valorPantalla.split("");
    var arrayValorPantallaLength = arrayValorPantalla.length -1
    var añadido = 0;

    // este if se encarga de que no se puedan poner varios signos juntos
    if (tecla == "x" || tecla === '+' || tecla === '-' || tecla === '*' || tecla === '/' || tecla === '.' || tecla === '%') {
        if (arrayValorPantalla[arrayValorPantallaLength] == "x" || arrayValorPantalla[arrayValorPantallaLength] == '+' || arrayValorPantalla[arrayValorPantallaLength] == '-' || arrayValorPantalla[arrayValorPantallaLength] == '*' || arrayValorPantalla[arrayValorPantallaLength] == '/' || arrayValorPantalla[arrayValorPantallaLength] == '.' || arrayValorPantalla[arrayValorPantallaLength] == '%') {
            
            console.log("he entrado")
            
        }else{
            inputElement.value += tecla;
            añadido++
        }
        
    }else if (valorPantalla == 0 || valorPantalla == "NaN") {
        inputElement.value = tecla;
    } else if (tecla != " "){
        inputElement.value += tecla;
    }else{
        console.log("uwu")
    }
}
// cuando aprietas a una tecla se le pone una sombra
function funcionApretar(elemento){

    elemento.classList.toggle("sombraInt");
    
}

// función para cuando clicas a un número/signo se muestre
function añadirValores(elemento) {
    var valorElem = elemento.innerHTML.trim();  // trim para eliminar los espacios en blanco
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value;
    var arrayValorPantalla = valorPantalla.split("");
    var arrayValorPantallaLength = arrayValorPantalla.length -1
    var añadido = 0;

    // este if se encarga de que no se puedan poner varios signos juntos
    if (valorElem == "x" || valorElem === '+' || valorElem === '-' || valorElem === '*' || valorElem === '/' || valorElem === '.' || valorElem === '%') {
        if (arrayValorPantalla[arrayValorPantallaLength] == "x" || arrayValorPantalla[arrayValorPantallaLength] == '+' || arrayValorPantalla[arrayValorPantallaLength] == '-' || arrayValorPantalla[arrayValorPantallaLength] == '*' || arrayValorPantalla[arrayValorPantallaLength] == '/' || arrayValorPantalla[arrayValorPantallaLength] == '.' || arrayValorPantalla[arrayValorPantallaLength] == '%') {
            
            console.log("he entrado")
            
        }else{
            inputElement.value += valorElem;
            añadido++
        }
        
    }
    // poner los signos ()
    else if (valorElem === "()" && añadido == 0) {
        inputElement.value =  "(" + valorPantalla + ")"
    }else if(valorPantalla == 0 || valorPantalla == "NaN" && añadido == 0){
        inputElement.value = valorElem;
    }else{
        inputElement.value += valorElem;
    }
    
    console.log(valorElem);
   
}

// función para calcular
function igual() {
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value.trim();  // trim sirve para eliminar los espacios en blanco
    var valorPantallaFinal = valorPantalla.replace(/x/g, "*").replace(/%/g, "/100");;  
    // sustituyo la x por el * para que se pueda calcular las multiplicaciones
    // y al igual con el % para calcular el porcentaje
    
    var resultado = eval(valorPantallaFinal);  
    inputElement.value = resultado;  
}
// función para eliminar todos los número de la pantalla 
// lo sustituyo por un 0 para que quede mas bonito
function botonC(){
    var inputElement = document.getElementById("pantalla");
    inputElement.value = 0;
}

// funcion para eliminar el ultimo caracter ya sea con con click o teclado
function eliminarUltimoCaracter(){
    
    var inputElement = document.getElementById("pantalla");
    var valorPantalla = inputElement.value.trim();
    // si en la pantalla solo está el 0 no se elimina para que se mantenga el 0 hasta que pongas un caracter válido
    if (valorPantalla != "0" && valorPantalla.length > 0) {
        inputElement.value = valorPantalla.slice(0, -1);  // eliminar el último carácter
    }
    
}




