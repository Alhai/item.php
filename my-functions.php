<?php 

// require "catalog.php";

/* Fonction pour afficher le prix en euros*/
function formatprice($centimes){
  return ($centimes/100).' €';
}

/* Fonction qui calcule le prix sans la tva */
function priceExcludingVAT($Prix,$VAT){
  return ceil( (100*$Prix) / (100+$VAT));
} 

/* Fonction qui calcule le % de réduction*/
function discount($price, $Discount) {
  $Discount = $price*($Discount/100);
  $Discount = (floor($Discount)/100);
  return $Discount;
}

 /* Fonction qui affiche le prix remisé*/
  function displayDiscountPrice($price, $Discount) {
    $Discount = discount($price, $Discount);
    $price = $price/100;
    $reduction = $price - $Discount;
    return $reduction;
}
 /* Fonction qui affiche l'image */
  function afficheImg($product){
      echo '<img class="card-img-top" src="' . $product["image"] . '" alt="Card image cap">';
  }
/* Fonction changer le prix avec la quantité */
function priceChange($price, $quantity){

}


 /* Fonction qui affiche le catalogue */
function showsProduct($products){
    foreach ($products as $key => $product) {  
          
          echo '<div class="card" style="width: 18rem;">';
          afficheDescription($product);
          afficheInfos($product);
          
          echo '</div>';
    }  
    
  }  
  /* Fonction qui affiche la description du produit*/
 function afficheDescription($product){
   echo ' <div class="card-body">';
   afficheImg($product);
     echo '<h5 class="card-title">'.$product["name"] .'</h5>';
     echo '<p class="card-text">'.$product["description"] .'</p>';
     echo '<p class="card-text">'.'<b>'. "discount"." : ".$product["Discount"] ." %" . '</b>'.'</p>';  
   echo '</div>';
 }
  /* Fonction qui affiche les prix */
 function afficheInfos($product){
   echo '<ul class="list-group list-group-flush">';
     echo '<li class="list-group-item">' . '<del>' . formatprice($product["price"]). '</del>' . '<b>' . " TTC" .'</b>' ." => ". formatprice(priceExcludingVAT($product["price"], $product["VAT"])) . '<b>' ." HT" .'</b>' . '</li>';
     echo '<li class="list-group-item">' . '<b>'. "Après réduction ".'</b>'.displayDiscountPrice($product["price"], $product["Discount"])." €".  '</li>';
   echo '</ul>';
 };
?>








