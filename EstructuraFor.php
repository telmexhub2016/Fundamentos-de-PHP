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
        // Estructura For
        $Meses[0] = "Enero";
        $Meses[1] = "Febrero";
        $Meses[2] = "Marzo";
        $Meses[3] = "Abril";
        $Meses[4] = "Mayo";
        $Meses[5] = "Junio";
        $Meses[6] = "Julio";
        $Meses[7] = "Agosto";
        $Meses[8] = "Septiembre";
        $Meses[9] = "Octubre";
        $Meses[10] = "Noviembre";
        $Meses[11] = "Diciembre";
        
        echo "<b> Los meses del año en nùmero</b><br>";
        
        for($i = 0; $i < 12; $i++){
            echo "El mes ".$Meses[$i]." es el mes <b>".($i+1)."</b> del año. <br>";
        }
        ?>
    </body>
</html>
