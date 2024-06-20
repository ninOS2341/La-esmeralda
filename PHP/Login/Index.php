<!--Nombre: Josue Islas Rosales
Grupo: 4AMPRO
Práctica 3.1 "LogIn"
Fecha: 30/05/2024-->

<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: Bienvenida.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Sources/Icon.png" type="image/png">
    <link rel="stylesheet" href="Estilo.css" type="text/css">
    <script defer src="Codigo.js"></script>
    <title>LogIn / Registro</title>
</head>
<body>
    <main>
        <div class="contenedor-principal">
            <div class="contenedor-trasero">
                <div class="caja-trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para acceder a la página.</p>
                    <button id="btn-iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja-trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión.</p>
                    <button id="btn-registrarse">Registrarse</button>
                </div>
            </div>
    
            <!--Formulario de Login y registro-->
            <div class="contenedor-log-reg">
    
                <!--Login-->
                <form action="Base/Login.php" method="POST" class="form-log">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="email" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button>Entrar</button>
                </form>
    
                <!--Registro-->
                <form action="Base/Registro.php" method="POST" class="form-reg">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electrónico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Registrarse</button>
                </form>
    
            </div>
        </div>
    </main>
</body>
</html>