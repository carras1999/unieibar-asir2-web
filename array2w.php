<?php

$w = [
    [2,4,45,77],
    [4,7]
];

$suma = 0;
foreach ($w as $v) {
    foreach ($v as $x) {
        $suma = $suma + $x;
    }
}

echo "la suma del array de dos W: " . $suma;



?>