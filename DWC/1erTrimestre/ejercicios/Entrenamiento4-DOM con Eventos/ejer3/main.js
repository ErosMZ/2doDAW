document.getElementById("desplegable").addEventListener("click", function(){

    var opcion = document.getElementById("desplegable")

    if (opcion.includes("1")) {
        alert("lista1")
    }else if(opcion.includes("2")){
        alert("lista2")
    }

})

document.getElementById("DNI").addEventListener("blur", function(){
    var varDNI = document.getElementById("DNI").value
    
    if(!validarDNI(varDNI)){
        alert("DNI incorrecto");
        var labelDNI = document.getElementById("DNI").style.border = "1px solid red";
    }else{

        var labelDNI = document.getElementById("DNI").style.border = "1px solid #b3d1ff";
        
    }
    
 })
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



document.getElementById("email").addEventListener("blur", function(){

    var varEmail = document.getElementById("email").value
    if(!validarCorreo(varEmail)){
        alert("Correo mal")
        var labelEmail = document.getElementById("email").style.border = "1px solid red";
    }else {

        var labelEmail = document.getElementById("email").style.border = "1px solid #b3d1ff";

    }

 })
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



document.getElementById("nombre").addEventListener("blur", function(){

    var varNom = document.getElementById("nombre").value
    if(!validarNombre(varNom)){
        var labelNom = document.getElementById("nombre").style.border = "1px solid red";
    }else{
        var labelNom = document.getElementById("nombre").style.border = "1px solid #b3d1ff";
    }

 })
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