<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - UTC</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <div class="register-container">
    <img src="images/utc.png" alt="" width="300" heigth="200">
   
        
        <h2>Registro de Nuevo Ingreso</h2>
        <form action="dashboard.html" method="POST">
            <label for="fullname">Nombre Completo</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirmar Contraseña</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
    </div>
</body>
</html>
