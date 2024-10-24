var eliminarTodas = 0;
var eliminarUnColor = 0;

var divEliminarTodo = document.getElementById("eliminarTodo");
var divEliminarColor = document.getElementById("eliminarColor");

var puntos = 0;
var fallos = 0;

var pelotasAMatar= 0;
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
    iniciarCronometro();
    
    var numeroPelotas = document.getElementById("numPelotas").value;
    pelotasAMatar = numeroPelotas;
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

    if (eliminarTodas == 1 && eliminarUnColor== 0) {

        for (let i = 1; i <= (pelotas * 2 ); i++) {
            var randomtamano = (Math.random() * 50 + 30);
            var randomTop = Math.floor(Math.random() * (700 - 75 + 1));
            var randomLeft = Math.floor(Math.random() * (990 - 75 + 1)) + 1;
            
            var randomtamano2 = (Math.random() * 50 + 30);
            var randomTop2 = Math.floor(Math.random() * (700 - 75 + 1)) + 50;
            var randomLeft2 = Math.floor(Math.random() * (990 - 75 + 1)) + 1;
            
            console.log(randomtamano);

            const nuevoDiv = document.createElement('div');
            const nuevoDiv2 = document.createElement('div');

            nuevoDiv.className = 'divClase' + i;
            nuevoDiv.style.top = randomTop + "px";
            nuevoDiv.style.left = randomLeft + "px";
            nuevoDiv.style.width = randomtamano + "px";
            nuevoDiv.style.height = randomtamano + "px";
            nuevoDiv.style.border = "2px solid black";
            nuevoDiv.style.borderRadius = "500px";
            nuevoDiv.style.position = 'absolute';
    
            nuevoDiv2.className = 'divClaseDos' + i;
            nuevoDiv2.style.top = randomTop2 + "px";
            nuevoDiv2.style.left = randomLeft2 + "px";
            nuevoDiv2.style.width = randomtamano2 + "px";
            nuevoDiv2.style.height = randomtamano2 + "px";
            nuevoDiv2.style.border = "2px solid black";
            nuevoDiv2.style.borderRadius = "500px";
            nuevoDiv2.style.position = 'absolute';
        
            if (i % 2 == 0) {
                nuevoDiv.style.backgroundColor = 'blue';
                nuevoDiv2.style.backgroundColor = 'green';
            } else {
                nuevoDiv.style.backgroundColor = 'red';
                nuevoDiv2.style.backgroundColor = 'yellow';
            }
    
            contenedorMain[0].appendChild(nuevoDiv);
            contenedorMain[0].appendChild(nuevoDiv2);
            divsArray.push(nuevoDiv);
            divsArray.push(nuevoDiv2);
        }
    
        // Agregar el event listener a cada div después de crearlos
        var puntosTodasPelotas = 0
        divsArray.forEach(function(div) {
            div.addEventListener('click', function() {
                const divPuntosAzules = document.querySelector('.puntosAzules');
                
                if ((pelotasAMatar -1) > puntosTodasPelotas ) {
                    puntosTodasPelotas++;
                    divPuntosAzules.innerText = "";
                    divPuntosAzules.innerText = puntosTodasPelotas;
                    div.remove()
                }else{
                    div.remove();
                    pantallaFinal(puntosTodasPelotas + 1, 0)
                }
                
                
            });
        });
    }else{
        var colorElegido = "";
        
        const numeroRandom = Math.floor(Math.random() * 4) + 1;
        const divColor = document.querySelector('.color');
        if (numeroRandom == 1) {
            colorElegido = "green"
            divColor.innerText = "Elimina las pelotas con color verde";
        }else if(numeroRandom == 2){
            colorElegido = "red"
            divColor.innerText = "Elimina las pelotas con color rojo";
        }else if(numeroRandom == 3){
            colorElegido = "yellow"
            divColor.innerText = "Elimina las pelotas con color amarillo";
        }else{
            colorElegido = "blue"
            divColor.innerText = "Elimina las pelotas con color azul";
        }
        
        
        for (let i = 1; i <= (pelotas * 4 + 8); i++) {

            var randomtamano = (Math.random() * 50 + 30);
            var randomTop = Math.floor(Math.random() * (700 - 75 + 1)) ;
            var randomLeft = Math.floor(Math.random() * (990 - 75 + 1)) + 1;
            
            var randomtamano2 = (Math.random() * 50 + 30);
            var randomTop2 = Math.floor(Math.random() * (700 - 75 + 1)) + 50;
            var randomLeft2 = Math.floor(Math.random() * (990 - 75 + 1)) + 1;
            console.log(randomtamano);
            const nuevoDiv = document.createElement('div');
            const nuevoDiv2 = document.createElement('div');
    
            nuevoDiv.className = 'divClase' + i;
            nuevoDiv.style.top = randomTop + "px";
            nuevoDiv.style.left = randomLeft + "px";
            nuevoDiv.style.width = randomtamano + "px";
            nuevoDiv.style.height = randomtamano + "px";
            nuevoDiv.style.border = "2px solid black";
            nuevoDiv.style.borderRadius = "500px";
            nuevoDiv.style.position = 'absolute';
            
            nuevoDiv2.className = 'divClaseDos' + i;
            nuevoDiv2.style.top = randomTop2 + "px";
            nuevoDiv2.style.left = randomLeft2 + "px";
            nuevoDiv2.style.width = randomtamano2 + "px";
            nuevoDiv2.style.height = randomtamano2 + "px";
            nuevoDiv2.style.border = "2px solid black";
            nuevoDiv2.style.borderRadius = "500px";
            nuevoDiv2.style.position = 'absolute';
        
            if (i % 2 == 0) {
                nuevoDiv.style.backgroundColor = 'blue';
                nuevoDiv2.style.backgroundColor = 'green';
            } else {
                nuevoDiv.style.backgroundColor = 'red';
                nuevoDiv2.style.backgroundColor = 'yellow';
            }
            

            if (nuevoDiv.style.backgroundColor == colorElegido) {
                nuevoDiv.style.zIndex = 6;
                
            }else{
                nuevoDiv.style.zIndex = 4;
            }

            if (nuevoDiv2.style.backgroundColor == colorElegido) {
                nuevoDiv2.style.zIndex = 6;
            }else{
                nuevoDiv2.style.zIndex = 4;
            }

            contenedorMain[0].appendChild(nuevoDiv);
            contenedorMain[0].appendChild(nuevoDiv2);
            divsArray.push(nuevoDiv);
            divsArray.push(nuevoDiv2);
        }
    
        // Agregar el event listener a cada div después de crearlos
        cont = 1; 
        divsArray.forEach(function(div) {
            div.addEventListener('click', function() {
                
                if (pelotasAMatar != cont) {
                    const colorFondo = div.style.backgroundColor;
                    const divPuntosAzules = document.querySelector('.puntosAzules');
                    const divPuntosRojos = document.querySelector('.puntosRojos');
                    if (colorFondo == colorElegido) {
                        console.log("El " + div.className + "tiene un fondo" + colorElegido + ".");
                        puntos++;
                        divPuntosAzules.innerText = "";
                        divPuntosAzules.innerText = puntos;
                        div.remove()
                        cont++
                    }else {
                        fallos++;
                        divPuntosRojos.innerText = "";
                        divPuntosRojos.innerText = fallos;
                        div.remove()
                    }
                    
                }else{
                    
                    pantallaFinal(cont, fallos)
                }
                
            });
        });
    }
    
}
function pantallaFinal(puntos, fallos) {
    detenerCronometro();
    contenedorMain[0].innerHTML = "";

    const divPuntosAzules = document.querySelector('.puntosAzules');
    const divPuntosRojos = document.querySelector('.puntosRojos');
    
    
    divPuntosAzules.remove();
    divPuntosRojos.remove();

    const divfinal = document.createElement('div');
    divfinal.textContent = "¡Felicidades! Obtuvo " + puntos + " puntos y " + fallos + " fallos";
    divfinal.classList.add('textoFinal'); 

    const botonReiniciar = document.createElement('button');
    botonReiniciar.textContent = "Reiniciar juego";

    contenedorMain[0].appendChild(divfinal);
    contenedorMain[0].appendChild(botonReiniciar);

    botonReiniciar.classList.add('botonFinal');
    botonReiniciar.addEventListener('click', function() {
        location.reload();
    });

    
}

function iniciarCronometro() {
    tiempoInicial = Date.now(); // Guardamos el tiempo inicial

    cronometro = setInterval(function() {
        var tiempoActual = Date.now() - tiempoInicial;
        document.getElementById("cronometro").textContent = formatearTiempo(tiempoActual);
    }, 1000);
}

function detenerCronometro() {
    clearInterval(cronometro); // Detenemos el intervalo
    tiempoFinal = Date.now() - tiempoInicial; // Calculamos el tiempo final
    document.getElementById("cronometro").textContent = formatearTiempo(tiempoFinal); // Mostramos el tiempo final
}

function formatearTiempo(tiempo) {
    var horas = Math.floor(tiempo / 3600000);
    var minutos = Math.floor((tiempo % 3600000) / 60000);
    var segundos = Math.floor((tiempo % 60000) / 1000);

    return (horas < 10 ? "0" + horas : horas) + ":" +
           (minutos < 10 ? "0" + minutos : minutos) + ":" +
           (segundos < 10 ? "0" + segundos : segundos);
}
