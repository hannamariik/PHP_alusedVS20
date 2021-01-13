<!DOCTYPE html>
<!--Hanna-Marii Kriisa, november 2020, Ülesanne 4 -->
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

</head>
<body>
<h1>Jagamine</h1><br>
<form method="get" action="yl4_tulemus.php">
    Sisesta arv a= <input type="text" name="a"><br>
    Sisesta arv b= <input type="text" name="b"><br>
    <input type="submit" name="saada" value="saada" >
</form>

<br><h1>Vanus</h1><br>
<form method="get" action="yl4_vanus.php">
    1 Vanus <input type="text" name="vanus1"><br>
    2 Vanus <input type="text" name="vanus2"><br>
    <input type="submit" name="saada" value="saada">
</form>

<br><h1>Ristkülik või ruut I</h1><br>
<form method="get" action="yl4_kyljed.php">
    külg a <input type="text" name="a1"><br>
    külg b <input type="text" name="b1"><br>
    <input type="submit" name="saada" value="saada">

</form>


<br><h1>Ristkülik või ruut II</h1><br>
<form method="get" action="yl4_kujundid.php">
    Sisesta nr 1-10 vahel <input type="text" name="kujund"><br>
    <input type="submit" name="saada" value="saada">
</form>

    <br><h1>Hinne</h1><br>
    <form method="get" action="yl4_hinne.php">
        Sisesta KT punktide arv <input type="text" name="punktid"><br>
        <input type="submit" name="saada" value="saada">
</form>
</body>

</html>
