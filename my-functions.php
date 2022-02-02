<?php 

require "catalog.php";
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
  function showsProduct($products){
    foreach ($products as $keys => $product) {         
      foreach ($product as $key => $infoproduct ){
        if ($key === "Prix"){
          echo " Prix" . formatprice($infoproduct).' TTC'. "\n" ."<br>";
          echo priceExcludingVAT($infoproduct/100,20). " €" . " Prix " ."HT"."<br>";  
        }
        elseif($key === "discount"){
          echo displayDiscountPrice($product["Prix"],$infoproduct) ."\n";
        }
        else {
          echo "<p>" . $key . ":" . $infoproduct . "<br>"."</p>" ;
        }
      }
      afficheImg($product);
    }  
  }
  function afficheImg($balec){
    
    echo "<img src=" . $balec["Url"] . " alt= image d'un casque de chat rose >" ;
  }
?>