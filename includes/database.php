<?php 

$db = mysqli_connect('186.122.181.144', 'root', '', 'appsalon');

// Mi IP publica es 186.122.181.144
// if(!$db) {
//     echo "Error en la conexión";
// } else {
//     echo "Conexión Correcta";
// }

if(!$db) {
    echo "Error en la conexión";
    exit;
}
