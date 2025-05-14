<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Y Registro - Tienda Doña Raque</title>
    <link rel="stylesheet" href="register/css/estilos.css">
    <nav class="menu-principal">
    <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#productos">Nuestros Productos</a></li>
        <li><a href="#quienes-somos">Quiénes Somos</a></li>
        <li><a href="#contacto">Contacto</a></li>
    </ul>
</nav>

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

    .menu-principal {
        background-color: #084f91;
        padding: 20px 0;
    }

    .menu-principal ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .menu-principal li {
        display: inline-block;
        margin: 0 15px;
    }

    .menu-principal a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    .menu-principal a:hover {
        color: #54a1ef;
    }

    /* Pie de página */
footer {
        background-color: #084f91;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: 50px;
        }

footer p {
            font-size: 18px;
        }

</style>

</head>
<body>
    
<main>

    <div class="contenedor__todo">
        <div class="caja__trasera"> 
            <div class="caja__trasera-login">  
                <h3>¿Ya tienes cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿aun no tienes una cuenta?</h3>
                <p>Registrate para que puedas Iniciar sesion</p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>
        <!--Este es un formulario de login y registro-->
        <div class="contenedor__login-register">
              <!--Login-->
            <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Entrar</button>
            </form>
            <!--Registro-->
            <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Registrarse</button>
            </form>
        </div>
    </div>
</main>
    
<script src="register/js/script.js"></script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <!-- Pie de página -->
 <footer>
    <p>© 2024 Todos los derechos reservados | @tiendaD-Raque</p>
</footer>

</body>
</html>
