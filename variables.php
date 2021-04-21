<?php
    //VARIABLES
    //las variables se declaran con un $ y son sensibles a mayusculas y minusculas
    $nombre = "Santiago";
    $Nombre = "bulmaro";
    $edad = 10;
    echo "<br> ////////////////////////////////////VARIABLES////////////////////////////////////////////<br>";
    //para concatenar en php se usan punto (.) en ves del signo +
    echo "Hola me llamo: " . $nombre . " y tengon: " . $edad;
    //como comprovar el tipo de dato que es
    var_dump($nombre);

    //CONSTANTES
    echo "<br> ////////////////////////////////////CONSTANTES////////////////////////////////////////////<br>";
    define("CONSTANTE", "value");//Con la palabra reservada define declaramos constantes
    define("CONSTANTE_EDAD", 23);
    echo CONSTANTE_EDAD;

    //OPERADORES LOGICOS > < >= <= != ==
    echo "<br> ////////////////////////////////OPERADORES LOGICOS///////////////////////////////////////<br>";
    $a = 1;
    $b = 2;
    if($a > $b)
        echo "Correcto";
    else
        echo "Incorrecto";

    echo "<br> ////////////////////////////////SWITCH///////////////////////////////////////<br>";
    $I = 1;

    switch($I){
        case 1:
            echo "El numero es 1";
            break;
        case 2:
            echo "El número es 2";
            break;
        default:
            echo "No hay número valido";
            break;
    }

    echo "<br> ////////////////////////////////Ciclos///////////////////////////////////////<br>";
    //ciclo for
    for($i = 0; $i < 3; $i++){
        echo "For " . $i  . "<br>";
    }
    echo "<br>";
    //while
    $c=0;
    while($c <= 3){
        echo "While: " . $c . "<br>";
        $c++;
    }
    echo "<br>";
    //do while
    $d = 0;
    do{
        echo "Do while: " . $d . "<br>";
        $d++;
    } while($d < 3);

    echo "<br> ////////////////////////////////Arreglos///////////////////////////////////////<br>";
    //para contar los elementos de un array se usan count() o sizeof()
    $array = array('Manzana', 'Pera', 'Durazno');
    for($i =0; $i < count($array); $i++){
        echo $array[$i] . "<br>";
    }
    //foreach
    foreach ($array as $key => $value){
        echo "Indice: " . $key . "Valor: " . $value . "<br>";
    }
?>