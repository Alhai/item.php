<?php 


 require "catalog.php";

/* Fonction pour afficher le prix en euros*/
function formatprice($centimes){
  return ($centimes/100).' €';
}

/* Fonction qui calcule le prix sans la tva */
function priceExcludingVAT($price,$vat){
  return ceil( (100*$price) / (100+$vat));
} 

/* Fonction qui calcule le % de réduction*/
function discount($price, $discount) {
  $Discount = $price*($discount/100);
  $Discount = (floor($discount)/100);
  return $Discount;
}

 /* Fonction qui affiche le prix remisé*/
  function displayDiscountPrice($price, $discount) {
    $discount = discount($price, $discount);
    $price = $price/100;
    $reduction = $price - $discount;
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

function showShoppingCart($products){
  foreach($products as $key => $product){
    echo '<pre>';
    echo afficheForm($product);
    echo '<button type="submit"'. 'class="btn btn-primary">'. 'COMMANDER'.'</button>'.'</td> ' ;
    echo '</pre>';
    
  }
}

function afficheForm($product){
      
      echo '<td>'.'<h5>'.'<b>' .'Article : '.'</b>'.$product["name"] .'<br>'.'</h5>'.'</td>';
      echo '<td>'.'<h5>'.'Pièce : ' . formatprice($product["price"]).  '</td>'. '<br>'.'</h5>'.'</td>'; 
      echo '<td>'.'<h5>'.'Quantité : '.$product["quantity"].'<br>'.'</h5>'.'</td>';
      echo '<input name="$product["Nom"]" type="number" class="form-control" placeholder="0" id="exampleInput" >'.'</td>';
      echo '<td>'.'<h5>'. 'Prix : ' . calculPrice($product["price"]). '</h5>'.'</td>';
          
}
function calculPrice($product){
      if ($product["quantity" > 0]){
        $product["price"] === $product["price"] * $product["quantity"];
      
    }
  }  



?>







