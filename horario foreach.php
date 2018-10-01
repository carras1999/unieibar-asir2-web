<?php

$dia = date("N");
$hora = date("G");

$horario = array(
    array("<b>LUNES<b>","BASE DE DATOS","EIE","SO","SO","WEB","WEB"), //LUNES
    array("<b>MARTES<b>","WEB","SEGURIDAD","REDES","REDES","BASE DE DATOS","BASE DE DATOS"), //MARTES
    array("<b>MIERCOLES<b>","SEGURIDAD","SEGURIDAD","SO","SO","EIE","EIE"), //MIERCOLES
    array("<b>JUEVES<b>","REDES","REDES","SO","SO","WEB","WEB"), //JUEVES
    array("<b>VIERNES<b>","SEGURIDAD","SEGURIDAD","REDES","REDES","INGLES","INGLES"), //VIERNES
);


//echo $horario[$dia-1][$hora-8] . "<br><br>";
$niggi = $horario[$dia-1][$hora-8];
echo "<table border=1>";
foreach ($horario as $all) { 
    echo "<tr>";
    foreach ($all as $asig) {
        echo "<td>";
        if ($dia-1 == ) {   
            echo "<b>" . $niggi . "<b>";
        } else {
            echo $horario[$dia-1][$hora-8];
        }
    echo $asig . "</td>";
    }
    echo "</tr>";
}
echo "</table>";