<?php
    class ConexionBD{
        public function CBD(){
            $BD = new PDO("mysql:host=127.0.0.1;dbname=crud","root","");//realizar la conexion a las bd
            return $BD;
        }
    }
?>