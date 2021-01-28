<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Hanna-Marii Kriisa</title>
</head>

<body>
<?php
$break = "<br>";

echo '<form action="9.php" method="get">
        <label for="nimi">Nimi </label>
        <input type="text" name="nimi" id="nimi"><br>
        <input type="submit" value="Saada">
    </form>';

$nimi = $_GET['nimi']??'';

$nimi = ucfirst(strtolower($nimi));
if (isset($_GET['nimi'])){
if (strlen($_GET['nimi'])){
echo "Tere, ".$nimi.$break;
}}

$sona = "Stalker";
for ($i=0;$i<strlen($sona);$i++) {
    echo $sona[$i].".";
}

echo '<form action="9.php" method="get">
        <label for="ropp">Sisesta "Sa oled täielik noob" </label>
        <input type="text" name="ropp" id="ropp"><br>
        <input type="submit" value="Saada">
    </form>';

$ropp = $_GET['ropp']??'';

$parandus = '****';
$sisestus = 'noob';
$nihe = 0;
$paranduse_algus = strpos($ropp, $sisestus, $nihe);
$paranduse_arv = strlen($sisestus);
if (isset($_GET['ropp'])){
if (strlen($_GET['ropp'])) {
    echo substr_replace($ropp, $parandus, $paranduse_algus, $paranduse_arv).$break;
}}

echo '<form action="9.php" method="get">
        <label for="eesnimi">Eesnimi </label>
        <input type="text" name="eesnimi" id="eesnimi"><br>
        
        <label for="perenimi">Perenimi </label>
        <input type="text" name="perenimi" id="perenimi"><br>
        <input type="submit" value="Saada">
    </form>';

$ees = $_GET['eesnimi']??'';
$pere = $_GET['perenimi']??'';

if (isset($_GET['eesnimi']) || isset($_GET['perenimi'])){
if (strlen($_GET['eesnimi']) || strlen($_GET['perenimi'])) {

    $eesnimi = strtr($eesnimi, ['ü'=> 'y', 'õ' => 'o', 'ö' => 'o', 'ä' => 'a', 'Õ' => 'o', 'Ö' => 'o', 'Ä' => 'a', 'Ü' => 'y']);
    $perenimi = strtr($perenimi, ['ü' => 'y', 'õ' => 'o', 'ö' => 'o', 'ä' => 'a', 'Õ' => 'o', 'Ö' => 'o', 'Ä' => 'a', 'Ü' => 'y']);

    echo strtolower($eesnimi.".".$perenimi."@hkhk.edu.ee");

}}


?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
