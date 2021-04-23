<?php
    class Modelo{
        static public function RutasModelo($rutas){
            if($rutas == "ingreso" || $rutas=="registrar" || $rutas=="empleados" || $rutas == "salir"){
                $pagina = "View/modulos/" . $rutas . ".php";//asignamos la ruta de la variable
            }else if($rutas == "index"){
                $pagina = "View/modulos/ingreso.php";
            }else{
                $pagina = "View/modulos/ingreso.php";
            }
            //retornamos la variable de paginn que contendra la rutas
            return $pagina;
        }
    }
?>