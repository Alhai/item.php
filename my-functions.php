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
          
          echo '<div class="card" style="width: 18rem;">';
          afficheDescription($product);
          afficheInfos($product);
          
          echo '</div>';
    }  
  }
  function afficheImg($product){
      afficheImg($product);
  }
  function afficheDescription($product){
    echo ' <div class="card-body">';
    echo '<img class="card-img-top" src="' . $product["Image"] . '" alt="Card image cap">';
      echo '<h5 class="card-title">'.$product["Nom"] .'</h5>';
      echo '<p class="card-text">'.$product["description"] .'</p>';
    echo '</div>';
  }
  function afficheInfos($product){
    echo '<ul class="list-group list-group-flush">';
      echo '<li class="list-group-item">'.'</li>';
      echo '<li class="list-group-item">'.'</li>';
      echo '<li class="list-group-item">'.'</li>';
    echo '</ul>';
  }
?>