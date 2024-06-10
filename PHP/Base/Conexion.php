<?php
    class database{
        private $hostname="localhost";
        private $database="la-esmeralda";
        private $username="root";
        private $contrasena="12345678";
        private $charset="utf8";

        function conectar(){
            try{
                $conexion="mysql:host" . $this->hostname ."; dbname=".$this->database ."; charset=". $this->charset;

            $options=[
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false
            ];

            $pdo=new PDO($conexion, $this->username, $this->contrasena, $options);

            return $pdo;
            }catch(PDOException $e){
                echo 'Error conexion'. $e->getMessage();
                exit;
            }
            
        }

    }

 /*$conexion=new mysqli("localhost", "root", "12345678", "la esmeralda", "3306");
 $conexion->set_charset("utf8");*/
    
    /*if($conexion){
        echo 'Conectado Exitosamente';
    }
    else{
        echo 'Error De Conexión';
    }*/

?> 