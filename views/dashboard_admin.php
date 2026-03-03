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
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Bienvenido Administrador <?php echo $_SESSION['nombre']; ?></h2>

<nav>
    <ul>
        <li><a href="registrar_residente.php">Registrar Residente</a></li>
        <li><a href="estadisticas.php">Estadísticas</a></li>
        <li><a href="reservas.php">Reservas</a></li>
        <li><a href="../controllers/logout.php">Cerrar sesión</a></li>
    </ul>
</nav>

</body>
</html>