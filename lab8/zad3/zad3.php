<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>the what?</title>
    <link href="zad3.css" rel="stylesheet" />
</head>
<body>
<form method="post" action='<?php echo $_SERVER['PHP_SELF'];?>'>
    <label>
    Text: <br><input type="text" name="text"><br><br>
    Operacja:<br>
    <select name="choice">
        <option value="1">odwrócenie ciągu znaków</option>
        <option value="2">zamiana liter na wielkie</option>
        <option value="3">zamiana liter na małe</option>
        <option value="4">liczenie liczby znaków</option>
        <option value="5">usuwanie białych znaków z początku i końca</option>
    </select>
    <input type="submit">
    </label>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = htmlspecialchars($_REQUEST['text']);
    $choice = $_REQUEST['choice'];
}
$GLOBALS["wynik"] = " ";
if($choice == "1"){
    echo strrev($text);
} else if($choice == "2"){
    echo strtoupper($text);
} else if($choice == "3") {
    echo strtolower($text);
} else if($choice == "4") {
    echo strlen($text);
} else if($choice == "5"){
    echo trim($text);
}
?>
</body>
</html>