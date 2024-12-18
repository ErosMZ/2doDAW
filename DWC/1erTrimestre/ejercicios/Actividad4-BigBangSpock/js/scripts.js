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

const parrafoGanador = document.getElementById("textoGanador");

window.onload = function(){
    cargarTablero();
    asignarElementosHTML();
    
}

function asignarElementosHTML() {
    let todosLosDivs = document.querySelectorAll("div");

    for(div of todosLosDivs) {

        // se lanza la función "drop" con el evento "drop"
        div.addEventListener("drop", dejar);

        // Se lanza la función "allowDrop" con el evento "dragover"
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
    console.log("ID del elemento arrastrado: " + idElement);
    
    var contenedorSeleccionado = document.getElementById("seleccionado");
    
    var elementoOriginal = document.getElementById(idElement);
    var elementoClonado = elementoOriginal.cloneNode(true);
    
    contenedorSeleccionado.appendChild(elementoClonado);
    
    objetoUsuario = idElement; 
    
    console.log("Contenedor seleccionado: ", contenedorSeleccionado);
    console.log("Objeto usuario: ", objetoUsuario);
    
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

    var usuario = document.getElementById("seleccionado");
    var enemigo = document.getElementById("enemigo");

    usuario.innerHTML = "";
    enemigo.src = "img/interrogante.png";

}

function deliverar(mensajeGanador) {
    
    document.getElementById("proteccion").className = "visible";
    document.getElementById("deliveracion").className = "visible";
    
    var parrafoGanador = document.getElementById("textoGanador");
    parrafoGanador.textContent = mensajeGanador;

    setTimeout(continuar,3000);

    console.log("Mensaje ganador " + mensajeGanador)
    evaluarPuntuacion()
    
}

function evaluarPuntuacion() {
    const botonContinuar = document.getElementById("continuar");

    botonContinuar.removeEventListener("click", manejarClickContinuar); 

    botonContinuar.addEventListener("click", manejarClickContinuar); 
    
    cargarTablero();
}

function manejarClickContinuar() {
    console.log("botón continuar");
    console.log("el ganador es " + ganador);

    const jugador = document.getElementById("jugador");
    const maquina = document.getElementById("maquina");
    
    // Contar los puntos actuales de cada jugador
    const puntosJugador = jugador.getElementsByClassName("punto").length;
    const puntosMaquina = maquina.getElementsByClassName("punto").length;

    // Ocultar los mensajes y protecciones
    document.getElementById("mensaje").className = "invisible";
    document.getElementById("proteccion").className = "invisible";
    document.getElementById("deliveracion").className = "invisible";

    if (puntosJugador < 10 && puntosMaquina < 10) {
        if (ganador === "maquina" && puntosMaquina < 10) {
            var divPunto = document.createElement("div");
            divPunto.className = "punto suyo";
            maquina.appendChild(divPunto);
        } else if (ganador === "usuario" && puntosJugador < 10) {
            var divPunto = document.createElement("div");
            divPunto.className = "punto mio";
            jugador.appendChild(divPunto);
        }
    }

    if (puntosJugador + 1 === 10) {
        alert("¡El jugador ha ganado con 10 puntos!");
    } else if (puntosMaquina + 1 === 10) {
        alert("¡La máquina ha ganado con 10 puntos!");
    }
}

function cargarTablero() {
    //Función donde crearemos los elementos que vayamos a necesitar, junto a sus atributos y eventos
    //La utilizaremos para reiniciar cada jugada
    
}

