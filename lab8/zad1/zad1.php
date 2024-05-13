<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = htmlspecialchars($_REQUEST['text']);
    if (empty($text)) {
        echo "podaj text";
    } else  {
        echo strtoupper($text),'<br>';
        echo strtolower($text),'<br>';
        echo strtoupper(substr($text,0,1)) , substr($text,1),'<br>';
        $x = explode(" ",$text);
        foreach($x as $a){
            echo strtoupper(substr($a,0,1)) , substr($a,1), " ";
        }
    }
}
?>