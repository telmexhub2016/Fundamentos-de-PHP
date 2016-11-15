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
        // Estructura de control if
        $Numero1 = 50;
        $Numero2 = 50;
        if ($Numero1 < $Numero2){
            echo $Numero1." es menor que ".$Numero2."<br>";
        }
        elseif($Numero2 < $Numero1){
            echo $Numero2." es menor que ".$Numero1."<br>";
        }
        else {
            echo $Numero1." = ".$Numero2."<br>";
        }
        ?>
    </body>
</html>
