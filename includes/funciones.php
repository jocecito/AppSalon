<?php

function obtenerServicios () : array {
    try {
        // Importar una conexion
        require 'database.php';
        // var_dump($db);
        // Escribir codigo SQL
        $db->set_charset("utf8"); //este te falta y funciona
        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db, $sql);

        // echo "<pre>";
        // var_dump( mysqli_fetch_assoc($consulta) );
        // echo"</pre>";
        $servicios = [];
        $i = 0;

        // Obtener los resultados
        while ( $row = mysqli_fetch_assoc($consulta)){
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }


        return $servicios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtenerServicios();