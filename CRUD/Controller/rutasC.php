<?php
class RutasController{
    //funcion 
    public function Plantilla(){
        include "View/Plantilla.php";
    }
    //function rutas
    public function Rutas(){
        if(isset($_GET['route'])){
            $rutas = $_GET['route'];
        }else{
            $rutas = "index";
        }
        //respuesta al modelo con :: hacemos conexion con una funcion
        $respuesta = Modelo::RutasModelo($rutas);
        include $respuesta;
    }
}