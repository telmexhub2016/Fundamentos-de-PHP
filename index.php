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
        //Declaraciòn de variables
        $Numero1 = 20;
        $Numero2 = 3;
        $suma = $Numero1 + $Numero2;
        $resta = $Numero1 - $Numero2;
        $multiplicacion = $Numero1 * $Numero2;
        $division = $Numero1/$Numero2;
        $residuo = $Numero1 % $Numero2;
        //Instrucciones
        echo "La suma de ".$Numero1." y ".$Numero2." es ".$suma."<br>";
        echo "La resta de ".$Numero1." y ".$Numero2." es ".$resta."<br>";
        echo "La division de ".$Numero1." y ".$Numero2." es ".$division."<br>";
        echo "La multiplicacion de ".$Numero1." y ".$Numero2." es ".$multiplicacion."<br>";
        echo "El residuo de ".$Numero1." y ".$Numero2." es ".$residuo."<br>";
    </body>
</html>
