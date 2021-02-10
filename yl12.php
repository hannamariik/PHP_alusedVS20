<!doctype html>
<head>
  <title>Ylesanne 12</title>
</head>

<body>
  <form>
    Stardiaeg: <input type="text" name="algus">
    Loppaeg: <input type="text" name="lopp">
    <input type="submit" value="sisesta">
  </form>
  
<?php
$algus = $_GET['algus'] ??'';
$lopp = $_GET['lopp']??'';

    if (isset($_GET['algus']) or isset($_GET['lopp'])) {
    if(strlen($_GET['algus']) and strlen($_GET['lopp'])) {
    if(strlen($_GET['algus'])<5 and strlen($_GET['lopp'])<5) {
      echo "Sisestatud aeg liiga luhike.";
     } else {
      echo gmdate("H:i", strtotime($lopp) - strtotime($algus));
     }

    } else{
        echo "Valjad on tyhjad!";
    }
}


$mehed="";
$mpalk=0;
$msuurim=0;
$naised="";
$npalk=0;
$nsuurim=0;
$allikas = file('tootajad.csv');
$break = '<br>';

for($i = 1; $i < count($file); $i++) {
    if (array_values(array_unique(explode(';', $allikas[$i])))[1] == "m"){
        $mehed ++;
        $mpalk += intval(array_values(array_unique(explode(';', $file[$i])))[2]);
        if(array_values(array_unique(explode(';', $file[$i])))[2] > $msuurim) {
            $msuurim = array_values(array_unique(explode(';', $file[$i])))[2];
        }
    } else {
        $naised ++;
        $npalk += intval(array_values(array_unique(explode(';', $file[$i])))[2]);
        if(array_values(array_unique(explode(';', $file[$i])))[2] > $nsuurim) {
            $nsuurim = array_values(array_unique(explode(';', $file[$i])))[2];
        }
    }
}
echo "Mehi kokku: ".$mehi.$break."Naisi kokku: ".$naisi.$break;
echo "Meeste palk kokku: ".$Meestepalk.$break."Naiste palk kokku: ".$Naistepalk.$break;
echo "Meeste suurim palk: ".$Meestepalksuurim.$break."Naiste suurim palk: ".$Naistepalksuurim.$break;
echo "Meeste keskmine palk: ".$Meestepalk/$mehi.$break."Naiste keskmine palk: ".$Naistepalk/$naisi.$break;

?>
</body>
</html>
