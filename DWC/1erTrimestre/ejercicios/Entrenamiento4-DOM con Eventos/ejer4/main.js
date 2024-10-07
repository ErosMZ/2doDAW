document.addEventListener("DOMContentLoaded", function() {
    var ElemenosLista1 = [];
    var ElemenosLista2 = [];
    var ElemenosLista3 = [];
    var ElemenosLista4 = [];

    const desplegable = document.getElementById("desplegable");

    // detecta el click
    document.body.addEventListener("click", function(event) {
        if (event.target.tagName === "P") {
            let texto = event.target.innerText;
            let valorSeleccionado = desplegable.value;

            if (valorSeleccionado === "") {
                alert("Por favor, selecciona una lista en el desplegable.");
                return;
            }

            // Mover el contenido según la lista seleccionada
            if (valorSeleccionado === "lista1") {
                moverParrafo("listado1", texto);
            } else if (valorSeleccionado === "lista2") {
                moverParrafo("listado2", texto);
            } else if (valorSeleccionado === "lista3") {
                moverParrafo("listado3", texto);
            } else if (valorSeleccionado === "lista4") {
                moverParrafo("listado4", texto);
            } else {
                alert("Por favor, selecciona una lista válida.");
            }

            event.target.remove(); 
        }
    });

    // Función para mover el párrafo a la lista
    function moverParrafo(idListado, texto) {
        var contenedor = document.getElementById(idListado);
        var nuevoParrafo = document.createElement("p");
        nuevoParrafo.textContent = texto;
        contenedor.appendChild(nuevoParrafo);
    }

    document.getElementById("boton").addEventListener("click", function() {
        let nombre = document.getElementById("nombre").value;
        let email = document.getElementById("email").value;
        let dni = document.getElementById("DNI").value;

        // Obtener el valor del desplegable
        var valor = desplegable.value;

        if (nombre === "" || email === "" || dni === "") {
            alert("Rellene todos los campos, gracias :)");
        } else {
            var parrafo = document.createElement("p");
            var texto = document.createTextNode(nombre + " con DNI " + dni + " y email " + email);

            if (valor === "lista1") {
                ElemenosLista1.push(texto);
                document.getElementById("listado1").appendChild(parrafo).appendChild(texto);
            } else if (valor === "lista2") {
                ElemenosLista2.push(texto);
                document.getElementById("listado2").appendChild(parrafo).appendChild(texto);
            } else if (valor === "lista3") {
                ElemenosLista3.push(texto);
                document.getElementById("listado3").appendChild(parrafo).appendChild(texto);
            } else if (valor === "lista4") {
                ElemenosLista4.push(texto);
                document.getElementById("listado4").appendChild(parrafo).appendChild(texto);
            } else {
                alert("Selecciona alguna lista");
            }
        }
    });

    // Validación de DNI
    document.getElementById("DNI").addEventListener("blur", function() {
        var varDNI = document.getElementById("DNI").value;
        if (!validarDNI(varDNI)) {
            alert("DNI incorrecto");
            document.getElementById("DNI").style.border = "1px solid red";
        } else {
            document.getElementById("DNI").style.border = "1px solid #b3d1ff";
        }
    });

    function validarDNI(dni) {
        var dniArray = dni.split("");
        var subDNIarray = dniArray.slice(0, 8);
        var DNISinLetra = subDNIarray.join("");
        var DNISinLetraInt = parseInt(DNISinLetra);
        var LetrasDNI = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

        if (dniArray.length === 9) {
            var operacion = DNISinLetraInt % 23;
            if (LetrasDNI[operacion] === dniArray[8]) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // Validación de correo electrónico
    document.getElementById("email").addEventListener("blur", function() {
        var varEmail = document.getElementById("email").value;
        if (!validarCorreo(varEmail)) {
            alert("Correo mal");
            document.getElementById("email").style.border = "1px solid red";
        } else {
            document.getElementById("email").style.border = "1px solid #b3d1ff";
        }
    });

    function validarCorreo(correo) {
        var variableCompravacionEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        return variableCompravacionEmail.test(correo);
    }

    // Validación de nombre
    document.getElementById("nombre").addEventListener("blur", function() {
        var varNom = document.getElementById("nombre").value;
        if (!validarNombre(varNom)) {
            document.getElementById("nombre").style.border = "1px solid red";
        } else {
            document.getElementById("nombre").style.border = "1px solid #b3d1ff";
        }
    });

    function validarNombre(nombre) {
        var ArrayyCaracteres = [' ', '.', ',', '!', '?', '@', '+', '-', '#', '$', '%', '&', '*', '/', '\\', '=', '<', '>', '^', '_', '`', '|', '~', ':', ';', '"', "'", '(', ')', '[', ']', '{', '}', '¿', '¡'];
        var ArrayNums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        var siOno = true;

        for (let caracter of ArrayyCaracteres) {
            if (nombre.includes(caracter)) {
                alert("El nombre no puede tener caracteres especiales o números");
                siOno = false;
                break;
            }
        }

        for (let num of ArrayNums) {
            if (nombre.includes(num)) {
                alert("El nombre no puede tener caracteres especiales o números");
                siOno = false;
                break;
            }
        }
        return siOno;
    }
});
