<?php
session_start();
include("../config/conexion.php");

if ($_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT COUNT(*) as total FROM usuarios WHERE rol='residente'");
$data = $result->fetch_assoc();
?>

<h2>Estadísticas</h2>
<p>Total de residentes: <?php echo $data['total']; ?></p>

<a href="dashboard_admin.php">Volver</a>