<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor, debes iniciar sesión");
                window.location = "Index.php"
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienveda - Josh</title>
</head>
<body>
    <h1>Bienvenid@ a mi mundo</h1>
    <br><br>
    <p>I created this world<br>
       To feel some control<br>
       Destroy it if I want
    </p>
    <br><br>

    <a href="Base/Cerrar.php">Cerrar sesión</a>
</body>
</html>