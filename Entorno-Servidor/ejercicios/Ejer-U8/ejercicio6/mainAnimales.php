<?php
/**
 * @author Silvia Vilar
 * Ej6UD8 - PruebaAnimales.php
 */
include_once "Canario.php";
include_once "Pinguino.php";
include_once "Perro.php";
include_once "Lagarto.php";
include_once "Gato.php";
print Animal::getTotalAnimales();
print Ave::getTotalAves();
print Mamifero::getTotalMamiferos();

//creamos varios animales de Lagarto
$godzilla = new Lagarto();
$godzilla->setNombre("Godzilla");
$diana = Lagarto::consSexo("H");
$diana->setNombre("Diana");
$juancho = Lagarto::consFull("M", "Juancho");
print Animal::getTotalAnimales();

print($godzilla);
$godzilla->tomarSol();
$godzilla->dormirse();
$godzilla->morirse();
print($diana);
$diana->tomarSol();

?>
