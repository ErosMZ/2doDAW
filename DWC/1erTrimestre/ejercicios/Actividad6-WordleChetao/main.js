var filasMain = 0;
var columnasMain = 0;
var cont = 0;
var ganador = 0;

var letrasEnRojo= "";
var letrasEnVerde= "";

const palabrasWordle = [
    "AMIGO", "BALON", "CIELO", "DULCE", "GATOS", "HIELO", "JUEGO", 
    "NIEVE", "OLIVO", "PARED", "QUESO", "SOLAR", "TIERRA", "UNICO", 
    "VIAJE", "ZORRO", "YERBA", "BURRO", "CARRO", 
    "DADO", "GRITO", "JABON", "MARTE", "PERRO", "ROCAS", "SALSA", 
    "TORRE", "VOLAR", "ZUECO", "LAPIZ", "ADIOS", "ACIDO"
];

// palabra aleatoria de la array (no sabia como se hacia y he tenido que pregunatar :( )
const palabraAleatoria = palabrasWordle[Math.floor(Math.random() * palabrasWordle.length)];

console.log(palabraAleatoria);

document.addEventListener("keydown", function(event) {
    var key = event.key.toUpperCase();
    
    if (cont == 7 && ganador == 0) {
        alert("Has perdido. La palabra era " + palabraAleatoria);
    } else if (ganador > 0) {
        alert("Ya has ganado");
    } else if (/^[A-Z]$/.test(key)) { // Si es una letra
        ponerLetras(key);
    } else if (key === 'ENTER') {
        enterTeclado();
    } else if (key === 'BACKSPACE') {
        borrar();
    }
});

let colorCambiado = 0;


document.querySelectorAll(".key").forEach(function(button) {
    button.addEventListener("click", function() {
        var valor = this.textContent.trim().toUpperCase();
        
        if (cont == 7 && ganador == 0) {
            alert("Has perdido. La palabra era " + palabraAleatoria);
        } else if (ganador > 0) {
            alert("Ya has ganado");
        } else {
            if (valor === "ENTER") {
                enterTeclado();
            } else if (valor === "BACKSPACE") {
                borrar();
            } else {
                ponerLetras(valor);
            }
        }
    });
});


function ponerLetras(letra){

    var filas = document.getElementsByClassName("row");
    var fila= filas[filasMain];
    var columnas = fila.getElementsByClassName('tile');
    
    if (columnasMain < 5) {
        columnas[columnasMain].textContent = letra.toUpperCase();
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

async function comprobarPalabraConAPI(palabra) {
    const url = `https://rae-api.com/api/words/${palabra}`;
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error("Error al contactar con la API");
        }
        const data = await response.json();
        
        return data;
    } catch (error) {
        console.error("Error comprobando la palabra:", error);
        return ;
    }
}


async function enterTeclado() {
    var filas = document.getElementsByClassName("row");
    var fila = filas[filasMain];
    var columnas = fila.getElementsByClassName('tile');
    var palabraPuesta = "";

    for (var i = 0; i < columnas.length; i++) {
        palabraPuesta += columnas[i].textContent.toLowerCase(); 
    }

    const esValida = await comprobarPalabraConAPI(palabraPuesta);

    if (!esValida) {
        alert("La palabra ingresada no es válida según la RAE.");
        return;
    }

    cont++;
    if (palabraPuesta === palabraAleatoria.toLowerCase()) {
        for (var i = 0; i < columnas.length; i++) {
            columnas[i].style.backgroundColor = "green";
        }
        alert("¡Usted ha ganado!");
        ganador++;
    } else {
        // Colorea las letras y ajusta el teclado según el estado
        var palabraAleatoriaSeparada = palabraAleatoria.toLowerCase().split(""); 
        for (var i = 0; i < columnas.length; i++) {
            if (columnas[i].textContent.toLowerCase() === palabraAleatoriaSeparada[i]) {
                columnas[i].style.backgroundColor = "green";
                letrasEnVerde += columnas[i].textContent;
            } else if (palabraAleatoria.toLowerCase().includes(columnas[i].textContent.toLowerCase())) {
                columnas[i].style.backgroundColor = "#ffeb3b";
            } else {
                columnas[i].style.backgroundColor = "#e57373";
                letrasEnRojo += columnas[i].textContent;
            }
        }
    }

    filasMain++;
    columnasMain = 0;
    if (cont == 6 && ganador == 0) {
        alert("La palabra era " + palabraAleatoria);
    }
}



function enter(){
    cont++
    var filas = document.getElementsByClassName("row");
    var fila= filas[filasMain];
    var columnas = fila.getElementsByClassName('tile');
    var palabraAleatoriaSeparada = palabraAleatoria.split("");
    var palabraPuesta= "";
    for (var i = 0; i < columnas.length; i++) {
        palabraPuesta += columnas[i].textContent; 
    }

    if (palabraPuesta == palabraAleatoria) {
        alert("Usted a ganadoooo");
        columnasMain = 1000;
        filasMain == 1000;
        ganador++;
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

    if (cont == 6 && ganador == 0) {
        alert("La palabra era " + palabraAleatoria);
    }
    var ArrayTeclado = document.querySelectorAll(".key");
        for (var i = 0; i < ArrayTeclado.length; i++) {
            const teclaActual = ArrayTeclado[i].textContent.trim();

            if (letrasEnVerde.includes(teclaActual)) {
                ArrayTeclado[i].style.backgroundColor = "green";
            } else if (letrasEnRojo.includes(teclaActual)) {
                ArrayTeclado[i].style.backgroundColor = "#e57373";
            }
        }

}

