<?php

$a = $_GET['a'];
$b = $_GET['b'];
$vastus = $a/$b;

if (empty($a)) {
    echo 'Täida kõik väljad!';
} elseif (empty($b)) {
    echo 'Täida kõik väljad!';
} else {
    echo 'Vastus on ';
    echo $vastus;
}