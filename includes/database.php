<?php 

$db = mysqli_connect('localhost', 'root', '', 'appsalon');

// if(!$db) {
//     echo "Error en la conexión";
// } else {
//     echo "Conexión Correcta";
// }

if(!$db) {
    echo "Error en la conexión";
    exit;
}
