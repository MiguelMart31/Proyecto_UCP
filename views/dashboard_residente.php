<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'residente') {
    header("Location: login.php");
    exit();
}
?>

<h1>Bienvenido Residente <?php echo $_SESSION['nombre']; ?></h1>
<a href="../controllers/logout.php">Cerrar sesión</a>