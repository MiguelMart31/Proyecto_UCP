<?php
session_start();

if ($_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

<h2>Módulo de Reservas</h2>
<p>Aquí irá el sistema de reservas (salón comunal, piscina, etc).</p>

<a href="dashboard_admin.php">Volver</a>