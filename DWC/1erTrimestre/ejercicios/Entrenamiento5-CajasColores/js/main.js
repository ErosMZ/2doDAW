/*
    Pon aquí las funciones que cambian la forma de los cuadrados a círculos.
*/

function circulo(elemento) {
    elemento.classList.toggle("circulo");
}
function sombra(elemento) {
    elemento.classList.remove("sombra");
}
function sombraInt(elemento){
    elemento.classList.remove("sombra");
    elemento.classList.add("sombraInt");
}
function eliminar(elemento) {
    // parentNode accede al elemento padre del nodo actual 
    elemento.parentNode.remove()

}