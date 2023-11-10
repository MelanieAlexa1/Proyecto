<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variables para la conexión a la base de datos
    $servidor = "localhost";       // Cambia esto si es necesario
    $usuario = "root";            // Usuario de MySQL
    $contrasena = "";             // Contraseña de MySQL
    $base_de_datos = "registro_usuarios";
    $conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $telefono = $_POST["telefono"];
    $sql = "INSERT INTO usuarios (nombre, correo, contrasena, telefono) VALUES ('$nombre', '$correo',
     '$contrasena', '$telefono')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso. Puedes iniciar sesión con tus credenciales.";
    } else {
        echo "Error al registrar usuario: " . $conexion->error;
    }
    $conexion->close();
} else {
    echo "Acceso no permitido.";
}
?>
