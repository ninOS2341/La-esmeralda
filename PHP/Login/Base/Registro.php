<?php
    
    include 'Conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //Cifrado (“encryption”) de Contraseña
    //$contrasena = hash('sha512', $contrasena);

    $datos = "INSERT INTO registros(nombre, usuario, correo, contrasena) 
              VALUES('$nombre_completo', '$usuario',' $correo', '$contrasena')";
    
    //Verificar que el corrreo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM registros WHERE correo = '$correo'");
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM registros WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya esta en uso, intenta con otro diferente");
                window.location = "../Index.html";
            </script>
        ';
        exit();
    }

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta en uso, intenta con otro diferente");
                window.location = "../Index.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $datos);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../Index.php";
            </script>
        ';
    }
    else{
        echo '
            <script>
                alert("Inténtalo de nuevo, usuario no registrado");
                window.location = "../Index.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>