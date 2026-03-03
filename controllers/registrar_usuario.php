<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'] ?? null;
    $documento = $_POST['documento'] ?? null;
    $telefono = $_POST['telefono'] ?? null;
    $apartamento = $_POST['apartamento'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $rol = $_POST['rol'] ?? 'residente';

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, documento, telefono, apartamento, email, password, rol) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nombre, $documento, $telefono, $apartamento, $email, $password, $rol);

    if ($stmt->execute()) {
    if ($_SESSION['rol'] == 'admin') {
        header("Location: ../views/dashboard_admin.php");
    } else {
        header("Location: ../views/login.php");
    }
    exit();
}

    $stmt->close();
    $conn->close();

} else {
    echo "Acceso no permitido";
}
?>