<?php
//Clase se crea con la palabra reservada class
class Color {
    //propiedades de objetos publicas para poder acceder desde cualqier parte del sistema
    public $pantalon;
    public $gorra;

    //metodo
    public function Ropa(){
        echo "<p>Pantalon color: $this->pantalon, Gorra color: $this->gorra <p>";
    }

}

$a = new Color();
$a -> pantalon = "Azul";
$a -> gorra = "Negro";
$a -> Ropa();

?>