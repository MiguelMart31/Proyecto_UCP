<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Residencial</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/validaciones.js" defer></script>
</head>
<body>

<div class="contenedor">
    <h2>Registro de Usuario Residencial</h2>
    <form action="../controllers/registrar_usuario.php" method="POST" onsubmit="return validarFormulario();">
        
        <input type="text" name="nombre" placeholder="Nombre completo" required>
        <input type="text" name="documento" placeholder="Documento" required>
        <input type="text" name="telefono" placeholder="Teléfono">
        <input type="text" name="apartamento" placeholder="Apartamento">
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit">Registrarse</button>
    </form>
</div>

</body>
</html>
