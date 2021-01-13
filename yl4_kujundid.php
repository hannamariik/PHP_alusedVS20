<?php

$ruut = range(1,5);
$ristkylik = range(6,10);
$number = $_GET['kujund'];

if ($number <= 5 && $number >= 1){
        echo "Sinu kujund on ruut";
} else if ($number >= 6 && $number <= 10){
        echo "Sinu kujund on ristkülik";
} else {
        echo "Vale number!";
}

