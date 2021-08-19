<?php 

$db = mysqli_connect('192.168.100.3', 'root', '', 'appsalon');

// Mi IP 192.168.100.3
//  if(!$db) {
//     echo "Error en la conexión";
//  } else {
//      echo "Conexión Correcta";
//  }

if(!$db) {
    echo "Error en la conexión";
    exit;
}
