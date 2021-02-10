<!doctype html>
<html lang="en">
<head>
</head>

<body>
<?php
$break = "<br>";

function tervitus(){
    echo "Tere päiksekesekene!";
}
echo tervitus().$break.$break;

function uudis() {
    echo '<form action="yl7.php" method="get">
        <label for="kiri">Liitu uudiskirjaga </label>
        <input type="text" name="uudis" id="uudis" ><br>
        <input type="submit" value="Saada">
    </form>';
}

echo uudiskiri().$break;

function kasutaja($nimi) {
    $break = "<br>";
    echo strtolower($nimi).$break;
    echo strtolower($nimi)."@hkhk.edu.ee".$break;
    echo "Kood: ".rand(1000000,9999999).$break;
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'.$break;
    echo 'Kood2: '.substr(str_shuffle($permitted_chars), 6, 7).$break;
}
error_reporting( 0);

echo kasutaja(kriisa);

echo '<form action="yl7.php" method="get">
        <label for="arv1">I arv </label>
        <input type="number" name="arv1" id="arv1" ><br>
        <label for="arv2">II arv </label>
        <input type="arv" name="arv2" id="arv2" ><br>
        
        <label for="arv3">III arv </label>
        <input type="number" name="arv3" id="arv3" ><br>
        <input type="submit" value="arv3">
    </form>';

$nr1 = $_GET['arv1']??'';
$nr2 = $_GET['arv2']??'';
$nr3 = $_GET['arv3']??'';

function jada($arv1,$arv2,$arv3) {
    if($nr3 >0) {
    for($y=$arv1;$y<=$arv2;$y += $arv3) {
        echo $y."<br>";
    }}

}
echo arvud($arv1,$arv2,$arv3);


echo '<form action="yl7.php" method="get">
        <label for="arva">Arv A </label>
        <input type="arva" name="arva" id="arva" ><br>
        <label for="arvb">Arv B </label>
        <input type="arvb" name="arvb" id="arvb" ><br>
        
        <input type="submit" value="arvuta">
    </form>';

$alus = $_GET['arva']??'';
$korgus = $_GET['arvb']??'';

function pindala($alus, $korgus) {
    echo "Ristküliku pindala: ".$arva * $arvb."<br>";
}

echo Vastus($arva,$arvb);

echo '<form action="yl7.php" method="get">
        <label for="isikkood">Isikukood </label>
        <input type="isikkood" name="isikkood" id="isikkood" ><br>
        
        <input type="submit" value="saada">
    </form>';

$kood = $_GET['isikkood']??'';

function kood($isikkood) {
if (isset($_GET['isikkood'])) {
if(strlen($_GET['isikkood'])) {
    if(strlen($kood) == 11) {
        echo "Õige isikukood "."<br>";
        if (substr($isikkood,0,1) == 3 || substr($isikkood,0,1) == 5) {
            echo "Mees"."<br>";
        } else {
            echo "Naine"."<br>";
        }
        echo "Sünniaeg: ".substr($isikkood, 5, 2).".".substr($isikkood, 3, 2).".".substr($isikkood, 1, 2)."<br>";
    } else {
        echo "Vale isikukood"."<br>";
    }
}}}

echo isikukood($isikkood);


function heamote() {
    $sona = array("alus1", "alus2", "alus3");
    $tegus = array("oeldis1", "oeldis2", "oeldis3");
    $sihitis = array("sihitis1", "sihitis2", "sihitis3");

    $nr1 = rand(0,2);
    $nr2 = rand(0,2);
    $nr3 = rand(0,2);
      echo $alus[$nr1]." ".$oeldis[$nr2]." ".$sihitis[$nr3]."<br>";

}
echo heamote();
?>
</body>
</html>
