var filasMain = 0;
var columnasMain = 0;

var letrasEnRojo= "";
var letrasEnVerde= "";
const palabrasWordle = [
    "AMIGO", "BALON", "CIELO", "DULCE", "GATOS", "HIELO", "JUEGO", 
    "NIEVE", "OLIVO", "PARED", "QUESO", "RATON", "SOLAR", "TIERRA", 
    "UNICO", "VIAJE", "ZORRO", "YERBA", "ARBOL", "BURRO", "CARRO", 
    "DADO", "GRITO", "JABON", "MARTE", "PERRO", "ROCAS", "SALSA", 
    "TORRE", "VOLAR", "ZUECO", "LAPIZ", "ADIOS", "ACIDO"
];

// palabra aleatoria de la array (no sabia como se hacia y he tenido que pregunatar :( )
const palabraAleatoria = palabrasWordle[Math.floor(Math.random() * palabrasWordle.length)];

console.log(palabraAleatoria);

  
document.querySelectorAll(".key").forEach(function (button) {

    button.addEventListener("click" , function() {
        
        const valor = this.textContent.trim();
        
        
        if (filasMain > 6) {
            alert("has perdido")
        }
        if(valor == "Enter"){
            enter()
            filasMain++;
            columnasMain = 0;
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

function enter(){
    var filas = document.getElementsByClassName("row");
    var fila= filas[filasMain];
    var columnas = fila.getElementsByClassName('tile');
    var palabraAleatoriaSeparada = palabraAleatoria.split("");
    var palabraPuesta= "";
    for (var i = 0; i < columnas.length; i++) {
        palabraPuesta += columnas[i].textContent; 
    }

    if (palabraPuesta == palabraAleatoria) {
        document.write("oleee")
    }else {
        for (var i = 0; i < columnas.length; i++) {
            if (columnas[i].textContent == palabraAleatoriaSeparada[i]) {
                columnas[i].style.backgroundColor="green"; 
                letrasEnVerde += columnas[i].textContent;
            }else if(columnas[i].textContent == ""){
                columnas[i].style.backgroundColor="#e57373";
                
            }
            else if (palabraAleatoria.includes(columnas[i].textContent)) {
                columnas[i].style.backgroundColor="#ffeb3b";
                
            }
            else{
                columnas[i].style.backgroundColor="#e57373"; 
                letrasEnRojo += columnas[i].textContent;
            }
            
        }
        
    }
    var ArrayTeclado = document.querySelectorAll(".key");
        for (var i = 0; i < ArrayTeclado.length; i++) {
            const teclaActual = ArrayTeclado[i].textContent.trim();

            if (letrasEnVerde.includes(teclaActual)) {
                ArrayTeclado[i].style.backgroundColor = "green";
            } else if (letrasEnRojo.includes(teclaActual)) {
                ArrayTeclado[i].style.backgroundColor = "red";
            }
        }

}

