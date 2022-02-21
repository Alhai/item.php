<?php 

var_dump($_POST);

foreach ($_POST as $key => $number) {
    var_dump($number);

    if (empty($number[0])){
     echo  $erreur[$number] = "<p>".'ATTENTION LE PANIER EST VIDE'."</p> "; 

  }
}