<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Tienda Doña Raque</title>
    <style>
        /* Estilos globales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tahoma', sans-serif;
        }
        body {
            background-color: #a7ffeb;
            color: #333;
            line-height: 1.6;
        }

        /* Barra de navegación */
        nav {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Encabezado */
        header {
            background-color: #46a2fd;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        header h1 {
            font-size: 50px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
        }

        /* Sección de contenido */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 50px;
        }

        .card {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            margin: 15px;
            width: 200px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .card h3 {
            font-size: 24px;
            margin: 15px 0;
        }

        .card p {
            font-size: 14px;
            color: #555;
        }

        /* Pie de página */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer p {
            font-size: 14px;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            header h1 {
                font-size: 36px;
            }

            .container {
                flex-direction: column;
                padding: 20px;
            }

            .card {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <!-- Barra de navegación -->
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Quienes Somos</a></li>
            <li><a href="#">Catalogo de Productos</a></li>
            <li><a href="#">Contáctenos</a></li>
        </ul>
    
        </nav>

    <!-- Encabezado -->
    <header>
        <h1>Bienvenido a Tienda Doña Raque</h1>
        <p>Donde encontraras los mejores Productos para tus necesidases</p>
    </header>

    <!-- Contenido principal -->
    <div class="container">
        <div class="card">
            <img src="https://via.placeholder.com/300" alt="Imagen 1">
            <h3>Abarrotes en General.</h3>
            <p>!Aqui encontraras la lista de tus productos Favoritos¡.</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/300" alt="Imagen 2">
            <h3>Lácteos</h3>
            <p>!Aqui encontraras la lista de tus productos Favoritos¡.</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/300" alt="Imagen 3">
            <h3>Bebidas</h3>
            <p>!Aqui encontraras la lista de tus productos Favoritos¡.</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/300" alt="Imagen 4">
            <h3>Aseo Personal</h3>
            <p>!Aqui encontraras la lista de tus productos Favoritos¡.</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/300" alt="Imagen 4">
            <h3>Aseo Hogar</h3>
            <p>!Aqui encontraras la lista de tus productos Favoritos¡.</p>
        </div>
          
</div>
</div>

    <!-- Pie de página -->
    <footer>
        <p>© 2024 Todos los derechos reservados | @tiendaD-Raque</p>
    </footer>

</body>
</html>
