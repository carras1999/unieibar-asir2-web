<?php

$dia = date("N");
$hora = date("G");

$horario = array(
    array("BASE DE DATOS","EIE","SO","SO","WEB","WEB"), //LUNES
    array("WEB","SEGURIDAD","REDES","REDES","BASE DE DATOS","BASE DE DATOS"), //MARTES
    array("SEGURIDAD","SEGURIDAD","SO","SO","EIE","EIE"), //MIERCOLES
    array("REDES","REDES","SO","SO","WEB","WEB"), //JUEVES
    array("SEGURIDAD","SEGURIDAD","REDES","REDES","INGLES","INGLES"), //VIERNES
);


echo $horario[$dia-1][$hora-8];