<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Residencial</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Iniciar Sesión</h2>
    <form action="../controllers/login_usuario.php" method="POST">
        <input type="email" name="email" placeholder="Correo" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>
</div>

</body>
</html>