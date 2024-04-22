<?php
function Suma_cyfr($a)
{
    $b = strlen(strval($a));
    $c = 0;
    for ($i = 0; $i < $b; $i++) {
        $d = floor($a / pow(10, $i)) % 10;
        //echo $digit;

        $c += $d;
    }
    echo $c;
}
?>