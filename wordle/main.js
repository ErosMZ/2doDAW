var filasMain = 0;
var columnasMain = 0;

document.querySelectorAll(".key").forEach(function (button) {

    button.addEventListener("click" , function() {
       
        const valor = this.textContent.trim();
        
        if(valor == "Enter"){
            console.log("Enter")

        }else if(valor == "Backspace"){
            borrar();
        }else{
            console.log("poner letras")
            ponerLetras(valor);
        }

    });

});

function ponerLetras(letra){

    var filas = document.getElementsByClassName("row");
    var fila= filas[filasMain];
    var columnas = fila.getElementsByClassName('tile');
    
    if (columnasMain < 5) {
        columnas[columnasMain].textContent = letra;
        columnasMain++;
        
    }

}

function borrar() {

    var filas = document.getElementsByClassName("row");
    var fila= filas[filasMain];
    var columnas = fila.getElementsByClassName('tile');

    if (columnasMain != 0) {
        columnasMain--;
        columnas[columnasMain].textContent = "";
    }

}

