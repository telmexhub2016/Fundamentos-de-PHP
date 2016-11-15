<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Creamos la conexión a la base de datos.
        $conectar = new PDO("mysql:dbname=comunidad;host:localhost","root","");
        //Recibir los datos del fomulario
        $nombreForm = $_POST["nombre"];
        $emailForm = $_POST["email"];
        $telefonoForm = $_POST["telefono"];
        //Preparamos la sentencia a ejecutar en MySQL
        $sentencia = $conectar->prepare("INSERT INTO usuarios (nombre,email,telefono) VALUES (:nombreBase,:emailBase,:telefonoBase)");
        
        //Enlazando los datos a los marcadores de parámetros en la sentencia preparada
        $sentencia->bindParam(":nombreBase",$nombreForm);
        $sentencia->bindParam(":emailBase", $emailForm);
        $sentencia->bindParam(":telefonoBase", $telefonoForm);
        
        //Ejecuta la sentencia preparada y guarda los datos.
        
        if($sentencia->execute()){
            echo "Los datos se guardaron correctamente.<br>";
            echo "<br><a href='index.html'>Continuar</a><br>";
        }
        else{
            print json_encode($sentencia->errorInfo());
        }
        
        
        ?>
    </body>
</html>
