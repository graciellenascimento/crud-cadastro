<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cadastrofuncionarios";

    if($conn = mysqli_connect($server, $user, $pass, $bd)) {
        //echo "conectado";
    } else 
        echo "erro";
?>