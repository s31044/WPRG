<?php
function Czy_Pangram($a) {
    $b = strtolower($a);

    for ($j = 97; $j <= 122; $j++) {
        $x = false;

        for ($i = 0; $i<strlen($b); ++$i) {
            if (ord($b[$i]) < 97 || ord($b[$i]) > 122)
                continue;
            if (ord($b[$i]) == $j)
                $x = true;
        }
        if (!$x)
            return false;
    }
    return true;
}
?>