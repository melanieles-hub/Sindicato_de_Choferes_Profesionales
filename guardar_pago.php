<?php

include("conexion.php");

$estudiante = $_POST['estudiante_id'];
$licencia = $_POST['licencia_id'];
$total = $_POST['total_pago'];

$sql = "INSERT INTO pagos(
            estudiante_id,
            licencia_id,
            total_pago
        ) VALUES(
            '$estudiante',
            '$licencia',
            '$total'
        )";

if(mysqli_query($conexion, $sql)){
    echo "Pago guardado correctamente";
}else{
    echo "Error al guardar";
}

?>