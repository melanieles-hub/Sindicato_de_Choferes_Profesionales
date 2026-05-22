<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST['nombre'];
    $cedula   = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $email    = $_POST['email'];
    $curso    = $_POST['curso_elegido']; // Este viene del campo oculto

    $sql = "INSERT INTO inscripciones (nombre, cedula, telefono, email, tipo_licencia) 
            VALUES ('$nombre', '$cedula', '$telefono', '$email', '$curso')";

    if (mysqli_query($conexion, $sql)) {
        echo "<script>
                alert('¡Inscripción enviada con éxito!');
                window.location.href='index.html';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}

?>