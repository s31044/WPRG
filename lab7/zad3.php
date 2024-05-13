<?php
function funkcja($a,$b,$c,$d){
    $e = array($a => $c);
    for($i = $a+1, $j = $c+1 ; $i <= $b && $j <= $d ; $i++,$j++){
        $e[$i] = $j;
    }
    print_r($e);
}
?>
