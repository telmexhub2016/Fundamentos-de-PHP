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
        // Switch
        $Opcion = $_POST["menudia"];
        switch ($Opcion) {
            case "1":
                echo "Hoy tenemos Empanadas de pollo y cafè";
                break;
            case "2":
                echo "Hoy tenemos Cochinita Pibil y agua de horchata";
                break;
            case "3":
                echo "Hoy tenemos Sincronizadas y cafè";
                break;
            default:
                echo "Si estas viendo esto no tenemos entrecomidas";
                break;
        }
        ?>
    </body>
</html>
