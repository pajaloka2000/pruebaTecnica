<?php
    function conectarDB() : mysqli{
        $db = mysqli_connect('localhost', 'root', 'root', 'datos_clima');

        if(!$db){
            echo "Error, no se pudo conectar";
            exit;
        }

        return $db;
    }
?>