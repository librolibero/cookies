<?php
// ustawienie wartosci i czasu waznosci ciastka 
$nazwa_ciastka = "uzytkownik";
$wartosc_ciastka = ""; //puste cookies
setcookie($nazwa_ciastka, $wartosc_ciastka, time() - 86400 , "/"); 
// 86400 = 1 dzien ten minus oznacza cofnięcie czasu "/" to ściezka dostepu zeby 
// nie kazdy mogl dostac nasze dane u mnie jest to folder cookies
?>
<!DOCTYPE html>
<html>
<head>
<title>Ciastka</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body style="background-color: blue; color: white">
<?php
echo "Cookie 'uzytkownik' skasowane.";
?>

</body>
</html>
