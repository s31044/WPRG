<?php
function Czy_pierwsza($a)
{
    for($i = 2;$i<$a;$i++){
        if($a%$i==0) {
            return false;
        }
    }
    return true;
}
function Drukuj_pierwsze($a)
{
    for($i = 2;$i<$a+1;$i++){
        if(Czy_pierwsza($i)){
            echo $i;
            echo '<br>';
        }
    }
}
?>