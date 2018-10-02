<?php

$horario = array(
    array("BASE DE DATOS","EIE","SO","SO","WEB","WEB"), //LUNES
    array("WEB","SEGURIDAD","REDES","REDES","BASE DE DATOS","BASE DE DATOS"), //MARTES
    array("SEGURIDAD","SEGURIDAD","SO","SO","EIE","EIE"), //MIERCOLES
    array("REDES","REDES","SO","SO","WEB","WEB"), //JUEVES
    array("SEGURIDAD","SEGURIDAD","REDES","REDES","INGLES","INGLES"), //VIERNES
);


//echo $horario[$dia-1][$hora-8] . "<br><br>";
$dia_actual = date("N")-1;
$hora_actual = date("G")-8;
//echo $horario[$hora][$dia] . "<br><br>";
// print horario
// https://stackoverflow.com/questions/141108/how-to-find-the-foreach-index
echo "<table border='1'>";
foreach ($horario as $i=>$dia) {
    echo "<tr>";
    foreach ($dia as $j=>$asig) {
        echo "<td>";       
        if ($i == $hora_actual && $j == $dia_actual) {
            echo "<b>" . $asig . "</b>";
            //echo "<b>" . $horario[$i][$j] . "</b>";
        } else {
            echo $horario[$i][$j];
        }
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";
?>