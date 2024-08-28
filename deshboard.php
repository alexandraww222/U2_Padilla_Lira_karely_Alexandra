<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla Principal - UTC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #004080; /* Color de fondo del encabezado */
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        form {
            text-align: center;
            margin-top: 10px;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 250px;
            text-align: center;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 150px; /* Tamaño consistente para todas las imágenes */
            object-fit: cover; /* Asegura que la imagen se ajuste bien a la tarjeta */
        }

        .card-content {
            padding: 15px;
        }

        .card h3 {
            margin: 0 0 10px 0;
            color: #004080; /* Color de texto del título */
        }

        .card p {
            margin: 0;
            color: #333;
        }

        footer {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Cursos</a></li>
            </ul>
        </nav>
    </header>

    <form action="logout.php" method="POST">
        <button type="submit">Cerrar Sesión</button>
    </form>

    <main>
        <section>
            <h2>Conoce nuestras instalaciones y carreras</h2>
            <div class="card-container">
                <div class="card">
                    <img src="images/inst3.jpg" alt="Instalaciones UTC">
                    <div class="card-content">
                        <h3>Instalaciones</h3>
                        <p>Explora nuestras modernas instalaciones diseñadas para el aprendizaje óptimo.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/software.jpg" alt="Carrera de Software">
                    <div class="card-content">
                        <h3>Ingeniería en Software</h3>
                        <p>Descubre nuestro programa de Software, enfocado en las últimas tecnologías.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/mecatronica.jpg" alt="Carrera de Mecatrónica">
                    <div class="card-content">
                        <h3>Ingeniería en Mecatrónica</h3>
                        <p>Una carrera innovadora que combina mecánica, electrónica y programación.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/bio.jpg" alt="Carrera de Biotecnología">
                    <div class="card-content">
                        <h3>Ingeniería en Biotecnología</h3>
                        <p>Aplica los conocimientos de biología y tecnología en el desarrollo de soluciones.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/entornos.jpg" alt="Carrera de Entornos Virtuales">
                    <div class="card-content">
                        <h3>Entornos Virtuales</h3>
                        <p>Adéntrate en el mundo de la realidad virtual y los entornos inmersivos.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Universidad Tecnológica de Coahuila</p>
    </footer>
</body>
</html>