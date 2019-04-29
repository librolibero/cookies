<?php
$nazwa_ciastka = "uzytkownik";
$wartosc_ciastka = "Aneta Liberacka";
setcookie($nazwa_ciastka, $wartosc_ciastka, time() + 86400 , "/"); // 86400 = 1 dzien
?>
<!DOCTYPE html>
<html>
<head>
<title>Ciastka</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body style="background-color: blue; color: white">

<?php
if(!isset($_COOKIE[$nazwa_ciastka])) { //czy jest ustawione
    echo "Cookie o nazwie '" . $nazwa_ciastka . "' nie jest ustawione!";
} else {
    echo "Cookie '" . $nazwa_ciastka . "' jest ustawione!<br>";
    echo "Wartość: " . $_COOKIE[$nazwa_ciastka];
}
?>

</body>
</html>
