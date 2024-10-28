
 document.getElementById("dni").addEventListener("blur", function(){
    var varDNI = document.getElementById("dni").value
    
    if(!validarDNI(varDNI)){
        alert("DNI incorrecto");
        var labelDNI = document.getElementById("dni").style.border = "1px solid red";
    }else{

        var labelDNI = document.getElementById("dni").style.border = "1px solid #b3d1ff";
        
    }
    
 })

 document.getElementById("email").addEventListener("blur", function(){

    var varEmail = document.getElementById("email").value
    if(!validarCorreo(varEmail)){
        alert("Correo mal")
        var labelEmail = document.getElementById("email").style.border = "1px solid red";
    }else {

        var labelEmail = document.getElementById("email").style.border = "1px solid #b3d1ff";

    }

 })

 document.getElementById("ip").addEventListener("blur", function(){

    var varIp = document.getElementById("ip").value
    if(!validarIP(varIp)){
        alert("Ip incorrecta: " + varIp)
        var labelIp = document.getElementById("ip").style.border = "1px solid red";
        
    }else {

        var labelIp = document.getElementById("ip").style.border = "1px solid #b3d1ff";
        
    }

 })
 
 // validar contraseña
 var contra = ""
 var PasswordValidada = 0;
 document.getElementById("password").addEventListener("blur", function(){

    var varPassw = document.getElementById("password").value
    if(!validarContrasena(varPassw)){
        var labelPassw = document.getElementById("password").style.border = "1px solid red";
    }else{
        var labelPassw = document.getElementById("password").style.border = "1px solid #b3d1ff";
        PasswordValidada = 1
        contra = varPassw
    }

 })

function validarContrasena(contrasena){

    const caracteresPermitidos = [
        ...Array.from("abcdefghijklmnopqrstuvwxyz"), 
        ...Array.from("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 
        ...Array.from("0123456789"),                   
        ...Array.from("!@#$%^&*()_+[]{}|;':\",.<>?/`~") 
    ];

    const contieneMinusc = /[a-z]/.test(contrasena)
    const contieneMayusc = /[A-Z]/.test(contrasena)
    const contieneDigito = /\d/.test(contrasena)
    const contieneEspecial = /[!@#$%^&*()_+[\]{}|;':",.<>?`~]/.test(contrasena)
    
    if(!contrasena.length >= 8){
        return false
    }

    if (!contieneMinusc || !contieneMayusc || !contieneDigito || !contieneEspecial) {
        alert("La contraseña debe contener al menos una letra minúscula, una letra mayúscula, un dígito y un carácter especial.");
        return false;
    }

    

    for (let i = 0; i < contrasena.length; i++) {
        if (!caracteresPermitidos.includes(contrasena[i])) {
            alert("La contraseña contiene caracteres no permitidos.");
            return false;
        }
    }
    return true;
}

 document.getElementById("repeat-password").addEventListener("blur", function(){
     
    var varContRep = document.getElementById("repeat-password").value
    if(!validarPasswordRepetida(varContRep)){
        var labelNom = document.getElementById("repeat-password").style.border = "1px solid red";
    }else{
        var labelNom = document.getElementById("repeat-password").style.border = "1px solid #b3d1ff";
        
    }
 })
 function validarPasswordRepetida(contraa) {

    if (PasswordValidada == 0) {
        alert("Rellena primero la contraseña");
        return false;
    }
    

    if (contraa != contra) {
        alert("Las contraseñas no coinciden");
        return false;
    }
    
    // Si todo es correcto, retornar true
    return true;
}
 document.getElementById("nombre").addEventListener("blur", function(){

    var varNom = document.getElementById("nombre").value
    if(!validarNombre(varNom)){
        var labelNom = document.getElementById("nombre").style.border = "1px solid red";
    }else{
        var labelNom = document.getElementById("nombre").style.border = "1px solid #b3d1ff";
    }

 })

 document.getElementById("apellidos").addEventListener("blur", function(){

    var apellido = document.getElementById("apellidos").value
    if (validarApellidos(apellido)) {
        var labelNom = document.getElementById("apellidos").style.border = "1px solid red";
        
    }else{
        var labelNom = document.getElementById("apellidos").style.border = "1px solid #b3d1ff";
    
    }
 })

  // Función para validar el DNI
 function validarDNI(dni) {
    var dniArray = dni.split("");
    var subDNIarray = dniArray.slice(0, 8); // Coge de la array los valores del 0 al 7
    var DNISinLetra = subDNIarray.join("");
    var DNISinLetraInt = parseInt(DNISinLetra);
    var LetrasDNI = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    
    if (dniArray.length === 9) {
        var operacion = DNISinLetraInt % 23;
        if (LetrasDNI[operacion] === dniArray[8]) {
            console.log("DNI correcto");
            return true;
        } else {
            
            
            return false;
        }
    } else {
      
        console.log("DNI incorrecto");
        return false;
    }
}

// Función para validar correo electronico
function validarCorreo(correo) {
    var variableCompravacionEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (correo.match(variableCompravacionEmail)) {
        console.log("Correo correcto");
        return true;
    } else {
        console.log("Correo incorrecto");
        return false;
    }
}

// Función para validar número de telefono
function validarTelefono(telefono) {
    var Arrayletras = ["a","b","c","d","e","f", "g", "h", "i","j","k","l","m","n","ñ", "o", "p", "q", "r", "s", "t", "u", "v","w", "x", "y", "z"];
    var ArraCaracteres = [' ', '.', ',', '!', '?', '@', '+', '-', '#', '$', '%', '&', '*', '/', '\\', '=', '<', '>', '^', '_', '`', '|', '~', ':', ';', '"', "'", '(', ')', '[', ']', '{', '}', '¿', '¡'];
    var telefArray = telefono.split("");

    if (telefArray.length === 9) {
        var contieneLetras = Arrayletras.some(letra => telefono.toLowerCase().includes(letra));
        var contieneCaracteres = ArraCaracteres.some(caracter => telefono.includes(caracter));
        
        if (!contieneLetras && !contieneCaracteres) {
            console.log("Teléfono correcto");
            return true;
        } else {
            console.log("El teléfono contiene letras o caracteres especiales");
            alert("Telefono Incorrecto")
            return false;
        }
    } else {
        console.log("El teléfono tiene un número incorrecto de dígitos");
        alert("Telefono Incorrecto")
        return false;
    }
}

// Función para validar dirección IP
function validarIP(ip) {
    var ipSeparada = ip.split(".");
    
    if (ipSeparada.length == 4) {
        if (ipSeparada.every(octeto => octeto >= 0 && octeto<= 255)) {
            
            return true;
        } else {
            
            console.log("Uno de los octetos de la IP es incorrecto");
            return false;
        }
    } else {
        
        console.log("Formato de IP incorrecto");
        return false;
    }
}

// Función para validar URL
function validarURL(url) {
    var validarUrl = /(?:https?):\/\/(\w+:?\w*)?(\S+)(:\d+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
    if (url.match(validarUrl)) {
        console.log("URL válida");
        return true;
    } else {
        alert("url inválida")
        console.log("URL inválida");
        return false;
    }
}


function validarNombre(nombre){
    var ArrayyCaracteres = [' ', '.', ',', '!', '?', '@', '+', '-', '#', '$', '%', '&', '*', '/', '\\', '=', '<', '>', '^', '_', '`', '|', '~', ':', ';', '"', "'", '(', ')', '[', ']', '{', '}', '¿', '¡'];
    var ArrayNums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    var siOno = true;
    var cont = 0;
    
    while( cont < ArrayyCaracteres.length && siOno){
        
        if(nombre.includes(ArrayyCaracteres[cont])){
            alert("El nombre no puede tener caracteres especiales o números")
            siOno = false
            
        }
        cont++
    }
    var cont2 = 0;
    while( cont2 < ArrayNums.length && siOno){
        
        if(nombre.includes(ArrayNums[cont2])){
            alert("El nombre no puede tener caracteres especiales o números")
            siOno = false
            
        }
        cont2++
    }
    return siOno

}
function validarApellidos(apellido){
    var ArrayyCaracteres = ['.', ',', '!', '?', '@', '+', '-', '#', '$', '%', '&', '*', '/', '\\', '=', '<', '>', '^', '_', '`', '|', '~', ':', ';', '"', "'", '(', ')', '[', ']', '{', '}', '¿', '¡'];
    var ArrayNums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    var cont = 0;
    var siOno = true;
    while(cont < ArrayyCaracteres.length){

        if(apellido.includes(ArrayyCaracteres[cont])){
            siOno = false
            alert("Apellido incorrecto")
        }
        cont++

    }
    var cont2 = 0;
    while(cont2 < ArrayyCaracteres.length){

        if(apellido.includes(ArrayNums[cont2])){

            siOno = false
            alert("Apellido incorrecto")
        }
        cont2++

    }

    if (!apellido.includes(" ")) {
        siOno = false
        alert("Se necesitan ambos apellidos")
    }

    return siOno
}


