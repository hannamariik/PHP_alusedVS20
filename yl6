<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>
