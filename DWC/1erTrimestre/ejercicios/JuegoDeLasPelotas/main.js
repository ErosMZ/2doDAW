var eliminarTodas = 0;
var eliminarUnColor = 0;

var divEliminarTodo = document.getElementById("eliminarTodo");
var divEliminarColor = document.getElementById("eliminarColor");


var contenedorZonaJuego = document.getElementsByClassName("contenedor");
const contenedorMain = document.getElementsByClassName('main');

document.getElementById("eliminarTodo").addEventListener("click" , function(){

    
    eliminarTodas = 1;
    eliminarUnColor = 0;
    console.log("Dentro")
    
    divEliminarTodo.classList.add("opcionSeleccionada");
    divEliminarColor.classList.remove("opcionSeleccionada");
})

document.getElementById("eliminarColor").addEventListener("click" , function(){

    eliminarTodas = 0;
    eliminarUnColor = 1;
    console.log("Dentro")
    divEliminarTodo.classList.remove("opcionSeleccionada");
    divEliminarColor.classList.add("opcionSeleccionada");
})

document.getElementById("jugar").addEventListener("click" , function(){
   
    
    var numeroPelotas = document.getElementById("numPelotas").value;
    if (eliminarTodas == 1 || eliminarUnColor == 1) {
        contenedorZonaJuego[0].remove();
        jugar(numeroPelotas);
    }
})

function jugar(pelotas) {
    contenedorMain.innerHTML = '';
    contenedorMain[0].style.position = 'relative';
    contenedorMain[0].style.overflow = 'hidden';

    const divsArray = [];

    for (let i = 1; i <= (pelotas * 2 + 6); i++) {
        var randomtamano = (Math.random() * 50 + 30);
        var randomTop = Math.floor(Math.random() * (700 - 75 + 1)) + 50;
        var randomLeft = Math.floor(Math.random() * (950 - 75 + 1)) + 75;

        console.log(randomtamano);
        const nuevoDiv = document.createElement('div');

        nuevoDiv.className = 'divClase' + i;
        nuevoDiv.style.top = randomTop + "px";
        nuevoDiv.style.left = randomLeft + "px";
        nuevoDiv.style.width = randomtamano + "px";
        nuevoDiv.style.height = randomtamano + "px";
        nuevoDiv.style.borderRadius = "500px";
        nuevoDiv.style.position = 'absolute';

        if (i % 2 == 0) {
            nuevoDiv.style.backgroundColor = 'blue';
        } else {
            nuevoDiv.style.backgroundColor = 'red';
        }

        contenedorMain[0].appendChild(nuevoDiv);

        divsArray.push(nuevoDiv);
    }

    // Agregar el event listener a cada div después de crearlos
    divsArray.forEach(function(div) {
        div.addEventListener('click', function() {
            console.log("Has hecho clic en el div " + div.className);
            // Aquí puedes agregar más acciones a realizar al hacer clic en el div
        });
    });
}
