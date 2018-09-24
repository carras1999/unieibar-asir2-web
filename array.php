<?php
$cars = array("Volvo", "BMW", "Toyota");

for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}

foreach($cars as $coche) {
    echo $coche;
    echo "<br>";
}
?>