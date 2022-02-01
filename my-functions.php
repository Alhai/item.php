<?php 


/* Fonction pour afficher le prix en euros*/
function formatprice($centimes){
  echo ($centimes/100).' €';
}

/* Fonction qui calcule le prix sans la tva */
function priceExcludingVAT($Prix,$VAT){
  return (100*$Prix) / (100+$VAT);
} 

/* Fonction qui calcule le % de réduction*/
function discount($Prix, $discount) {
  $discount = $Prix*($discount/100);
  $discount = (floor($discount)/100);
  return $discount;
}

 /* Fonction qui affiche le prix remisé*/
  function displayDiscountPrice($Prix, $discount) {
    $discount = discount($Prix, $discount);
    $Prix = $Prix/100;
    $reduction = $Prix - $discount;
    return $reduction;
  } 
?>