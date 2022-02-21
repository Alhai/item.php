<?php 

require "catalog.php";

/* Fonction pour afficher le prix en euros*/
function formatprice($centimes){
  return ($centimes/100).' €';
}

/* Fonction qui calcule le prix sans la tva */
function priceExcludingVAT($Prix,$VAT){
  return ceil( (100*$Prix) / (100+$VAT));
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
 /* Fonction qui affiche l'image */
  function afficheImg($product){
      echo '<img class="card-img-top" src="' . $product["Image"] . '" alt="Card image cap">';
  }
   /* Fonction qui affiche la description du produit*/
  function afficheDescription($product){
    echo ' <div class="card-body">';
    afficheImg($product);
      echo '<h5 class="card-title">'.$product["Nom"] .'</h5>';
      echo '<p class="card-text">'.$product["description"] .'</p>';
      echo '<p class="card-text">'.'<b>'. "discount"." : ".$product["discount"] ." %" . '</b>'.'</p>';  
    echo '</div>';
  }
   /* Fonction qui affiche les prix */
  function afficheInfos($product){
    echo '<ul class="list-group list-group-flush">';
      echo '<li class="list-group-item">' . '<del>' . formatprice($product["Prix"]). '</del>' . '<b>' . " TTC" .'</b>' ." => ". formatprice(priceExcludingVAT($product["Prix"], $product["VAT"])) . '<b>' ." HT" .'</b>' . '</li>';
      echo '<li class="list-group-item">' . '<b>'. "Après réduction ".'</b>'.displayDiscountPrice($product["Prix"], $product["discount"])." €".  '</li>';
    echo '</ul>';
  }
  function errorMessage($products){
   
  }
 /* Fonction qui affiche */
function showsProduct($products){
    foreach ($products as $key => $product) {  
          
          echo '<div class="card" style="width: 18rem;">';
          afficheDescription($product);
          afficheInfos($product);
          
          echo '</div>';
    }  
    
  }
?>