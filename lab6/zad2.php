<?php
function Sumy_ciagow($a,$b,$c)
{
    $Arytm = array($a);
    $Geom = array($a);
    $ary = $a;
    $geo = $a;
    for($i = 1;$i<$c;$i++){
        $ary+=$b;
        $geo*=$b;
        $Arytm[] = $ary;
        $Geom[] = $geo;
    }
    echo array_sum($Arytm);
    echo '<br>';
    echo array_sum($Geom);
    echo '<br>';
    echo $a;
    echo '<br>';
    echo $b;
    echo '<br>';
    echo $c;
}
?>