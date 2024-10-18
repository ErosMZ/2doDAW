<?php
    /**
     * Diseñar la función operaMatriz que se encarga básicamente de sumar, restar, multiplicar o dividir
     * dependiendo lo que solicite el usuario
     * @author Eros Muñoz Zanón
     */
    $numeros1 = readline("Dime los números de la primera array separado por esapcios: ");
    $numeros2 = readline("Dime los números de la segunda array separado por esapcios: ");
    $numeros1Array = explode(" ", $numeros1);
    $numeros2Array = explode(" ", $numeros2);
    
    function operaMatriz($array1, $array2, $ope){

        // si no tienen la misma logitud las arrays devuelve una especie de error
        if (count($array1) != count($array2)) {
            return "Las matrices no tienen el mismo tamaño\n";
        }

        // si contiene algun 0 alguna de las array devuelve un error
        $contiene0= false;
        for ($i=0; $i < count($array1) ; $i++) { 
            if ($array1[$i] == 0) {
                $contiene0 = true;
            }
        }
        
        for ($i=0; $i < count($array2) ; $i++) { 
            if ($array2[$i] == 0) {
                $contiene0 = true;
            }
        }

        // si no contiene ningún 0 muestra los valores de las arrays
        if ($contiene0) {
            return "Alguna de las arrays contiene un 0\n";

        }else{
            // imprimimos los valores de las arrays
            echo "\nLos valores de la array1 son: \n";
            for ($i=0; $i < count($array1) ; $i++) { 
                echo $array1[$i] . " ";
            }

            echo "\nLos valores de la array2 son: \n";
            for ($i=0; $i < count($array2) ; $i++) { 
                echo $array2[$i] . " ";
            }
            echo "\n";
            
            // Hacemos la opereación dependiendo cual nos haya indicado que hagamos
            for ($i = 0; $i < count($array1); $i++) {
                switch ($ope) {
                    case 's':
                        $resultado[] = $array1[$i] + $array2[$i];
                        break;
                    case 'r':
                        $resultado[] = $array1[$i] - $array2[$i];
                        break;
                    case 'm':
                        $resultado[] = $array1[$i] * $array2[$i];
                        break;
                    case 'd':
                        
                        $resultado[] = $array1[$i] / $array2[$i];
                        break;
                }
            }
            echo "Resultado de la operación: ";
            // Mostramos el resultado de la operación
            for ($i = 0; $i < count($resultado); $i++) { 
                echo $resultado[$i] . " ";
            }
            echo "\n";
        }
    }
    
    
    $seguir = true;
    // bucla para que pueda hacer las operaciones que quiera sin tener que volver a ejecutar el programa
    while($seguir){
        $operacion = readline("Que operación quiere hacer sumar (s), restar(r), multiplicar(m) o dividir(d) para salir (c): ");
        if ($operacion == "s" || $operacion == "r" || $operacion == "m" || $operacion == "d" ) {
            operaMatriz($numeros1Array,  $numeros2Array, $operacion);
        }else if($operacion == "c"){ // c para salir
            echo "\n Adios \n";
            $seguir = false;
        }else { // si a puesto un caracter que no tenga sentido salta un texto y deja de ejecutar el programa
            echo "Caracter inválido vuleva a intentarlo...\n";
        }
        
    }
    
?>