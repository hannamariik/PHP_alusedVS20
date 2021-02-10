<!doctype html>
<html lang="en">
<head>
    <title>Hanna-Marii Kriisa</title>
</head>
<body>
<div class="container">

<?php
// Hanna-Marii Kriisa, 20.01.2021, ylesanne 6
// GENEREERIMINE
$break = "<br>";
for ($y = 1; $y<=100; $y++) {
    if ($y % 10 == 0) {
        echo $y.". ".$break;
    } else {
        echo $y.". ";
    }
}

for ($y = 0; $y < 10; $y++) {
    echo "*";
}
for ($y = 0; $y < 10; $y++) {
    echo "*".$break;
}
?>

    <form action="6.php" method="get">
        <label for="tarn">Sisestage palun tärnide arv </label>
        <input type="number" name="arv1" id="arv1" ><br>

        <input type="submit" value="tarnid">
    </form>
    <?php
    $tarn = $_GET['arv1']??'';

    for ($x=0; $x<$tarn; $y ++) {
        echo str_repeat("*",$x);
    }


    for ($y=10; $y>=1; $y--) {
        if ($y % 2 == 0) {
            echo $y.$break;
        } else {
            continue;
        }
    }

    for ($y=1; $y<=100;$y++) {
        if ($y % 3 == 0) {
            echo $y.", ";
        } else {
            continue;
        }
    }

    // MASSIIVID

    $gurls = array("tudruk1", "tudruk2", "tudruk3", "tudruk4", "tudruk5",);
    $bois = array("poiss1", "poiss2", "poiss3", "poiss4", "poiss5");

    for ($y=0; $y<count($gurls); $y++) {
        echo $break.$gurls[$y].", ".$bois[$y];
    }
    echo $break.$break.$break;

    $gurls2 = array("tudruk1", "tudruk2", "tudruk3", "tudruk4", "tudruk5",);
    $bois2 = array("poiss1", "poiss2", "poiss3", "poiss4", "poiss5");

    for ($y=0;$y<5; $y++) {
            $randomKey=array_rand($gurls2);
            echo $gurls2[$randomKey].", ";
            unset($gurls2[$randomKey]);

        $randomKey2=array_rand($bois2);
        echo $bois2[$randomKey2].$break;
        unset($bois2[$randomKey2]);

    }


    ?>
</body>
</html>
