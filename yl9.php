<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hanna-Marii Kriisa</title>
</head>

<body>
<?php
$break = "<br>";

echo '<form action="yl9.php" method="get">
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
</body>
</html>
