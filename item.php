<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php include 'header.php' ?>
<?php
$Nom = "Le chatcasque";
$Prix = "30$";
$Url = "https://media.ldlc.com/r1600/mkp/9044035fb1e741bfbacc0f24e288e469.jpeg";

echo "Le nom du produit est $Nom sont prix est de $Prix";
echo "<img src=\"$Url\" alt=\"banana\">";
?>
<?php include 'catalog-with-keys.php'?>
<?php include 'footer.php' ?>
</body>
</html>
