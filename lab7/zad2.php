<?php
function wsadż_dolar($a, $b){
    if($b<count($a)){
        for($i=count($a);$i>$b;$i++){
            $a[i]=$a[i-1];
        }
        $a[$b]="$";
    } else {
        echo "bląd";
    }
}
?>
