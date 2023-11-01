<!DOCTYPE html>
<html>
<head>
    <title>Página de Inicio</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Categorías</a>
                <div class="dropdown-content">
                    <a href="#">Cámaras</a>
                    <a href="#">Alarmas</a>
                    <a href="#">Domótica</a>
                    <a href="#">Servicio Técnico</a>
                </div>
            </li>
            <li><a href="#">Contáctenos</a></li>
            <li><a href="#">Inicio de Sesión</a></li>
        </ul>
        <img src="logo.png" alt="Logo" class="logo">
    </div>

    <div class="container">
        <h1>Bienvenido a nuestra página</h1>
        <h2>Iniciar sesión</h2>
        <form action="procesar_inicio.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required><br><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>

            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="">Selecciona un rol</option>
                <option value="administrador">Administrador</option>
                <option value="usuario">Usuario</option>
            </select><br><br>

            <input type="submit" value="Iniciar sesión">
        </form>

        <h2>¿Aún no tienes una cuenta?</h2>
        <a href="registro.php">Registrarse</a>
    </div>
</body>
</html>
