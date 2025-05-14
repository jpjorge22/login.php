<?php
include 'conexion_be.php';

header('Content-Type: application/json'); // Esto le dice a Postman que se espera JSON

$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    echo json_encode([
        'status' => 'success',
        'mensaje' => 'Inicio de sesión exitoso'
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'mensaje' => 'Usuario no existe o contraseña incorrecta'
    ]);
}
