<?php

$matricula = $_POST['matricula'];


// Si el ultimo numero es 5 o 6 puede circular el dia miercoles
$lastChar = substr($matricula, -1);

if($lastChar == "5" OR $lastChar == "6"){

    $mysqli = new mysqli("172.17.0.3", "root", "password", "picoyplaca");

    if ($mysqli->connect_errno) {
        echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $query ="INSERT INTO placas(`placa`) VALUES ('{$matricula}')";

    if (!$mysqli->query($query)) {
        echo "Falló la creación del registro: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    echo "Puedes circular y se guardo la placa";
    die;
}

echo "No puedes circular";
die;




?>
