<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Avaleht</title>
</head>
<body>
    <ul>
    <li><a href="avaleht.php">Avaleht</a></li>
    <li><a href="leht1.php?leht=leht1">Link1</a></li>
    <li><a href="leht2.php?leht=leht2">Link2</a></li>
    <li><a href="leht3.php?leht=leht3">Link3</a></li>
    </ul>
<?php

if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    if(is_file($leht.'.php')){
        include($leht.'.php');
    }else {
        echo "Lehte ei eksisteeri";
    }

}
?>
</body>

</html>
