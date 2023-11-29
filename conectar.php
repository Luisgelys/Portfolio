<?php

$conexion = mysqli_connect('localhost', 'root', '', 'contactos') or die (mysql_error($mysqli));

insertar ($conexion);

function insertar ($conexion){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $consulta = "INSERT INTO contacto (nombre, email)
    VALUES ('$nombre', '$email')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
?>

<script>
    setTimeout( function(){
        window.location.replace("contacto.html");
    }, 200);
</script>