<?php
function Pomnoz(array $a, array $b)
{
    $c = array();
    for ($i = 0;$i<count($a[0]);$i++){
        $c[] = array();
        for($j = 0;$j<count($b);$j++){
            $c[$i][] = 0;
            for($k=0;$k<count($a);$k++){
                $c[$i][$j] += ($a[$k][$i]*$b[$j][$k]);
            }
        }
    }
}
function Mnozenie_macierzy(array $a, array $b)
{
    if(count($a) == count($b[0])) {
        Pomnoz($a, $b);
    } elseif(count($a[0]) == count($b)){
        Pomnoz($b,$a);
    } else{
        echo "error: not matching matrixes";
        xdebug_break();
    }
}
?>