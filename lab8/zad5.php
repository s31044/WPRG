<html lang="pl">
<head>
</head>
<body>

<form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
    Text: <input type="text" name="text">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = htmlspecialchars($_REQUEST['text']);
    if (empty($text)) {
        echo "no jak mi nic nie podaż to nic nie pszefiltruję";
    } else  {
        $z = 0;
        $b = false;
        for ($a = 0; $a<strlen($text); $a++ ){
            $y  = (string) substr($text,$a,1);
            if($b){
                $z++;
            }
            if($y == ","){
                $b = true;
            }
        }
        echo $z;
    }
}
?>
</body>
</html>