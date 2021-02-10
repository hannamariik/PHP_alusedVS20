<!DOCTYPE html>
<html>
<head>
    <title>Hanna-Marii Kriisa</title>
</head>
<body class="container">
<?php
$db_server = 'localhost';
$db_andmebaas = 'muusikapood';
$db_kasutaja = 'kriisa';
$db_salasona = 'qwerty';
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
if(!$yhendus){
    die('Andmebaas pole ühendatud');
}


$stmt = $yhendus->prepare("INSERT INTO kasutajad (kasutaja, parool) VALUES (?,?)");
$stmt->bind_param("ss", $kasutajanimi, $kryp);

$kasutajanimi = "admin";
$parool = 'test';
$sool = 'kiri';
$kryp = crypt($parool, $sool);
$stmt->execute();


$kasutajanimi = "mart";
$parool = 'parool';
$sool = 'kiri';
$kryp = crypt($parool, $sool);
$stmt->execute();

$stmt->close();
$yhendus->close();



?>
</body>
</html>
