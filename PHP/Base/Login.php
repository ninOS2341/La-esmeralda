<?php

    session_start();
    
    include 'Conexion.php';

    $correo = $_POST['email'];
    $contrasena = $_POST['password'];

    //Cifrado (“encryption”) de Contraseña
    //$contrasena = hash('sha512', $contrasena);

    $validar = mysqli_query($conexion, "SELECT * FROM registros WHERE correo = '$correo'
    and contrasena = '$contrasena'");

    if(mysqli_num_rows($validar) > 0 ){

        $_SESSION['usuario'] = $correo;

        header("location: ../Bienvenida.php");
        exit;
    }
    else{
        echo '
            <script>
                alert("Usuario o contraseña incorrectos");
                window.location = "../Index.php";
            </script>
        ';
        exit;
    }

?>