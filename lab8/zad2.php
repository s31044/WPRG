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
        for ($a = 0; $a<strlen($text); $a++ ){
            $y  = (string) substr($text,$a,1);
            $z = $y;
            if($y == "1" || $y == "2" || $y == "3" || $y == "4" || $y == "5" || $y == "6" || $y == "7" || $y == "8" || $y == "9" || $y == "0"){
                echo $z;
            }
        }
    }
}
?>
</body>
</html>