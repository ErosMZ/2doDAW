//Mensajes de los resultados de las jugadas
var ganador = "";

var mensajes = {
    tipa: "Tijeras cortan papel",
    papi: "Papel tapa piedra",
    pila:"Piedra aplasta lagarto",
    lasp: "Lagarto envenena a Spock",
    spti: "Spock rompe tijeras",
    tila: "Tijeras decapitan lagarto",
    lapa: "Lagarto devora papel",
    pasp: "Papel desautoriza a Spock",
    sppi: "Spock vaporiza piedra",
    piti: "Piedra aplasta tijeras"
}
var objetoUsuario = "";
//Variables que contendrán los elementos HTML que vayamos a necesitar

const parrafoGanador = document.getElementById("textoGanador");

window.onload = function(){
    cargarTablero();
    asignarElementosHTML();
    
}

function asignarElementosHTML() {
    let todosLosDivs = document.querySelectorAll("div");

    for(div of todosLosDivs) {

        // Se lanzará la función "drop", con el evento "drop"
        div.addEventListener("drop", dejar);

        // Se lanzará la función "allowDrop", con el evento "dragover"
        div.addEventListener("dragover", permitirMover);
    }

   let items = document.getElementsByClassName("item");
    for (let item of items) {
        item.draggable = true;
        item.addEventListener("dragstart", arrastrar);
    }

}

function permitirMover(ev) {
    /*
        Por defecto no se pueden arrastrar elementos dentro de otros.
        Cambiamos este comportamiento en los divs
    */
  ev.preventDefault();
}
function arrastrar(valor) {
    console.log(valor)
    valor.dataTransfer.setData("id",valor.target.id);
    

}

function dejar(valor) {

    valor.preventDefault();

    var idElement = valor.dataTransfer.getData("id");
    console.log(idElement)
    var contenedorSeleccionado = document.getElementById("seleccionado");

    // Añadimos el objeto arrastrado al contenedor #seleccionado
    contenedorSeleccionado.appendChild(document.getElementById(idElement));
    objetoUsuario = idElement;
    
    console.log("COntenedor seleccionado " + contenedorSeleccionado.appendChild(document.getElementById(idElement)))
    valorRandom();
}

function valorRandom(){

    const numeroAleatorio = Math.floor(Math.random() * 5);

    var arrayFotos = [];

    arrayFotos[0] = "img/piedra.png";
    arrayFotos[1] = "img/papel.png";
    arrayFotos[2] = "img/tijera.png";
    arrayFotos[3] = "img/lagarto.png";
    arrayFotos[4] = "img/spock.png";

    var fotoRandom = arrayFotos[numeroAleatorio];

    var imagenEnemigo = document.getElementById("imagenEnemigo");
    console.log(fotoRandom);
    imagenEnemigo.src = fotoRandom;
    
    mostrarMensaje(objetoUsuario, fotoRandom);

}

/*var mensajes = {
    tipa: "Tijeras cortan papel",
    papi: "Papel tapa piedra",
    pila:"Piedra aplasta lagarto",
    lasp: "Lagarto envenena a Spock",
    spti: "Spock rompe tijeras",
    tila: "Tijeras decapitan lagarto",
    lapa: "Lagarto devora papel",
    pasp: "Papel desautoriza a Spock",
    sppi: "Spock vaporiza piedra",
    piti: "Piedra aplasta tijeras"
}*/

function mostrarMensaje(usuario, maquina) {
    console.log(usuario)
    
    var mensajeGanador = "";
    console.log("Usuraio " + usuario);
    console.log("Maquina " + maquina)
    if (usuario == "tijera" && maquina.includes("papel")) {
  
        mensajeGanador = (Object.values(mensajes)[0])
        ganador = "usuario";

    }else if (usuario == "papel" && maquina.includes("tijera")) {

        mensajeGanador = (Object.values(mensajes)[0])
        ganador = "maquina";

    }else if (usuario == "papel" && maquina.includes("piedra")) {
        
        mensajeGanador = (Object.values(mensajes)[1])
        ganador = "usuario";

    }else if (usuario == "piedra" && maquina.includes("papel")) {
        
        mensajeGanador = (Object.values(mensajes)[1])
        ganador = "maquina";

    }else if (usuario == "piedra" && maquina.includes("lagarto")) {
        
        mensajeGanador = (Object.values(mensajes)[2])
        ganador = "usuario";

    }else if (usuario == "lagarto" && maquina.includes("piedra")) {
        
        mensajeGanador = (Object.values(mensajes)[2])
        ganador = "maquina";

    }else if (usuario == "lagarto" && maquina.includes("spock")) {
        
        mensajeGanador = (Object.values(mensajes)[3])
        ganador = "usuario";

    }else if (usuario == "spock" && maquina.includes("lagarto")) {
        
        mensajeGanador = (Object.values(mensajes)[3])
        ganador = "maquina";

    }else if (usuario == "spock" && maquina.includes("tijera")) {
        
        mensajeGanador = (Object.values(mensajes)[4])
        ganador = "usuario";

    }else if (usuario == "tijera" && maquina.includes("spock")) {
        
        mensajeGanador = (Object.values(mensajes)[4])
        ganador = "maquina";

    }else if (usuario == "tijera" && maquina.includes("lagarto")) {
        
        mensajeGanador = (Object.values(mensajes)[5])
        ganador = "usuario";

    }else if (usuario == "lagarto" && maquina.includes("tijera")) {
        
        mensajeGanador = (Object.values(mensajes)[5])
        ganador = "maquina";

    }else if (usuario == "lagarto" && maquina.includes("papel")) {
        
        mensajeGanador = (Object.values(mensajes)[6])
        ganador = "usuario";

    }else if (usuario == "papel" && maquina.includes("lagarto")) {
        
        mensajeGanador = (Object.values(mensajes)[6])
        ganador = "maquina";

    }else if (usuario == "papel" && maquina.includes("spock")) {
        
        mensajeGanador = (Object.values(mensajes)[7])
        ganador = "usuario";

    }else if (usuario == "spock" && maquina.includes("papel")) {
        
        mensajeGanador = (Object.values(mensajes)[7])
        ganador = "maquina";

    }else if (usuario == "spock" && maquina.includes("piedra")) {
        
        mensajeGanador = (Object.values(mensajes)[8])
        ganador = "usuario";

    }else if (usuario == "piedra" && maquina.includes("spock")) {
        
        mensajeGanador = (Object.values(mensajes)[8])
        ganador = "maquina";

    }else if (usuario == "piedra" && maquina.includes("tijera")) {
        
        mensajeGanador = (Object.values(mensajes)[9])
        ganador = "usuario";

    }else if (usuario == "tijera" && maquina.includes("piedra")) {
        
        mensajeGanador = (Object.values(mensajes)[9])
        ganador = "maquina";

    }else if (maquina.includes(usuario)) {
        mensajeGanador = "Empate"
        ganador = "Empate";
    }
    console.log("El gran ganador es " + ganador);

    deliverar(mensajeGanador);
}


function continuar() {
    
    //Función que lanzamos cuando pulsamos al botón continuar
    //Volvemos a ocultar el mensaje;
    document.getElementById("mensaje").className = "visible";
    document.getElementById("proteccion").className = "visible";
    document.getElementById("deliveracion").className = "visible";

    //Si es una jugada reiniciamos todo menos los contadores de puntos.
    //Si es el final de la partida, también incluimos los contadores de puntos.
    cargarTablero();

}

function deliverar(mensajeGanador) {
    
    document.getElementById("proteccion").className = "visible";
    document.getElementById("deliveracion").className = "visible";
    
    // Aseguramos que el mensaje se actualice con el contenido de la variable
    var parrafoGanador = document.getElementById("textoGanador");
    parrafoGanador.textContent = mensajeGanador;

    setTimeout(continuar,3000);

    console.log("Mensaje ganador " + mensajeGanador)
    evaluarPuntuacion()
    
}

function evaluarPuntuacion() {
    document.getElementById("continuar").addEventListener("click", function() {
        console.log("botón continuar");
        console.log( "el ganador es " + ganador )
        
        const jugador = document.getElementById("jugador");
        const maquina = document.getElementById("maquina");
        document.getElementById("mensaje").className = "invisible";
        document.getElementById("proteccion").className = "invisible";
        document.getElementById("deliveracion").className = "invisible";
        if (ganador === "maquina") {
            // Aquí puedes agregar los divs que desees con la clase punto y mio
            var divPunto = document.createElement("div");
            divPunto.className = "punto mio";  // Aquí asignas ambas clases: punto y mio
            jugador.appendChild(divPunto); // Agrega el div al contenedor jugador
        } else if (ganador === "usuario") {
            // Si el ganador es el usuario, también puedes agregar divs de manera similar
            var divPunto = document.createElement("div");
            divPunto.className = "punto suyo"; // Asignando las mismas clases
            maquina.appendChild(divPunto); // Agrega el div al contenedor jugador
        } else {
            // Si no hay ganador, puedes agregar otra lógica aquí
        }

        cargarTablero();
    });
}





function cargarTablero() {
    //Función donde crearemos los elementos que vayamos a necesitar, junto a sus atributos y eventos
    //La utilizaremos para reiniciar cada jugada
}

/***************************DRAG AND DROP ****************************/

//Funciones para el drag&drop
 
 /***************************FIN DRAG AND DROP **************************/