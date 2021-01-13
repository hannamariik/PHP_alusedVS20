<?php
$punktid = $_GET['punktid'];

switch ($punktid) {
    case "10":
        echo "SUPER!";
        break;
    case "8":
    case "9":
    case "7":
    case "6":
    case "5":
        echo "TEHTUD!";
        break;
    case "5":
    case "4":
    case "3":
    case "2":
    case "1":
        echo "KASIN!";
        break;
    default:
        echo "Sisesta oma punktid!";
}
