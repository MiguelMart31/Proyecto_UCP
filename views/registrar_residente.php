<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrar Residente</title>
</head>
<body>

<h2>Registrar Nuevo Residente</h2>

<form action="../controllers/registrar_usuario.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="documento" placeholder="Documento" required>
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="text" name="apartamento" placeholder="Apartamento">
    <input type="email" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>

    <!-- Rol oculto -->
    <input type="hidden" name="rol" value="residente">

    <button type="submit">Registrar</button>
</form>

<br>
<a href="dashboard_admin.php">Volver al menú</a>

</body>
</html>