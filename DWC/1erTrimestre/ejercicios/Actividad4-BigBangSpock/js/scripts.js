//Mensajes de los resultados de las jugadas
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
function mostrarMensaje(usuario, maquina ) {
    
    console.log("Usuraio " + usuario);
    console.log("Maquina " + maquina)
    if (usuario == "tijera" && maquina.includes("papel")) {
  
        console.log(Object.values(mensajes)[0])

    }else if (usuario == "papel" && maquina.includes("tijera")) {
  
        console.log(Object.values(mensajes)[0])

    }else if (usuario == "papel" && maquina.includes("piedra")) {
        
        console.log(Object.values(mensajes)[1])

    }else if (usuario == "piedra" && maquina.includes("papel")) {
        
        console.log(Object.values(mensajes)[1])

    }else if (usuario == "piedra" && maquina.includes("lagarto")) {
        
        console.log(Object.values(mensajes)[2])

    }else if (usuario == "lagarto" && maquina.includes("piedra")) {
        
        console.log(Object.values(mensajes)[2])

    }else if (usuario == "lagarto" && maquina.includes("spock")) {
        
        console.log(Object.values(mensajes)[3])

    }else if (usuario == "spock" && maquina.includes("lagarto")) {
        
        console.log(Object.values(mensajes)[3])

    }else if (usuario == "spock" && maquina.includes("tijera")) {
        
        console.log(Object.values(mensajes)[4])

    }else if (usuario == "tijera" && maquina.includes("spock")) {
        
        console.log(Object.values(mensajes)[4])

    }else if (usuario == "tijera" && maquina.includes("lagarto")) {
        
        console.log(Object.values(mensajes)[5])

    }else if (usuario == "lagarto" && maquina.includes("tijera")) {
        
        console.log(Object.values(mensajes)[5])

    }else if (usuario == "lagarto" && maquina.includes("papel")) {
        
        console.log(Object.values(mensajes)[6])

    }else if (usuario == "papel" && maquina.includes("lagarto")) {
        
        console.log(Object.values(mensajes)[6])

    }else if (usuario == "papel" && maquina.includes("spock")) {
        
        console.log(Object.values(mensajes)[7])

    }else if (usuario == "spock" && maquina.includes("papel")) {
        
        console.log(Object.values(mensajes)[7])

    }else if (usuario == "spock" && maquina.includes("piedra")) {
        
        console.log(Object.values(mensajes)[8])

    }else if (usuario == "piedra" && maquina.includes("spock")) {
        
        console.log(Object.values(mensajes)[8])

    }else if (usuario == "piedra" && maquina.includes("tijera")) {
        
        console.log(Object.values(mensajes)[9])

    }else if (usuario == "tijera" && maquina.includes("piedra")) {
        
        console.log(Object.values(mensajes)[9])

    }else if (maquina.includes(usuario)) {
        console.log("Empate")
    }
}


function continuar() {
    //Función que lanzamos cuando pulsamos al botón continuar
    //Volvemos a ocultar el mensaje;
    document.getElementById("mensaje").className = "invisible";
    document.getElementById("proteccion").className = "invisible";
    document.getElementById("deliveracion").className = "invisible";

    //Si es una jugada reiniciamos todo menos los contadores de puntos.
    //Si es el final de la partida, también incluimos los contadores de puntos.
    cargarTablero();
}

function deliverar() {
    document.getElementById("proteccion").className="visible";
    document.getElementById("deliveracion").className="visible";
    setTimeout(mostrarMensaje,2000);
}



function cargarTablero() {
    //Función donde crearemos los elementos que vayamos a necesitar, junto a sus atributos y eventos
    //La utilizaremos para reiniciar cada jugada
}

/***************************DRAG AND DROP ****************************/

//Funciones para el drag&drop
 
 /***************************FIN DRAG AND DROP **************************/