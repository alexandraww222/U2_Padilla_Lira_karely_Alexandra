<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UTC</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

    <div class="login-container">
    <img src="images/utc.png" alt="" width="300" heigth="300">
        <h2>Iniciar Sesión</h2>
        <form action="dashboard.php" method="POST">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
             
        </form>
        <p>¿No tienes cuenta? <a href="register.php">Registrate</a></p>

     
    </div>
</body>
</html>
