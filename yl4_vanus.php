<?php
$vanus1 = $_GET['vanus1'];
$vanus2 = $_GET['vanus2'];

if (!empty($vanus1>$vanus2)) {
    echo 'Esimene on vanem kui teine';
} elseif (!empty($vanus1<$vanus2)) {
    echo 'Teine on vanem kui esimene';
}  elseif (!empty($vanus1==$vanus2)) {
    echo 'Esimene ja teine on sama vanad';
}