<?php
//Hanna-Marii Kriisa, 23.11.2020, Ülesanne 3
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$romb = 4*$a;
$trapets = $a + $b / 2*$c;

if (empty($a)) {
    echo 'Täida väljad';
}

    echo 'Trapetsi pindala=';
    echo $trapets;
    echo '<br>Rombi ümbermõõt=';
    echo $romb;
?>
