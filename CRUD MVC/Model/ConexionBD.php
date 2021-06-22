<?php
    class ConexionBD{
        public function CBD(){
            $BD = new PDO("mysql:host=127.0.0.1;dbname=crud","root","");//realizar la conexion a las bd
            return $BD;
        }
    }
// Comentario agregado desde branch Main Remoto
?>
>>>>>>> 741918519dd6d942fda1f25a8bf9fbec3dc19315
