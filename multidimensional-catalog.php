<?php
$products = [
"chatcasqueRose"=> [
    "Nom" => "Le chatcasque Rose",
    "Prix" => 3275,
    "Poids" => "200",
    "discount" => 10,
    "Url" => "https://www.cdiscount.com/pdt2/1/4/7/3/700x700/hom0753308545147/rw/casque-d-oreille-chat-casque-sans-fil-pliable-casq.jpg",
  ],

"chatcasqueViolet" => [
    "Nom" => "Le chatcasque Violet",
    "Prix" => 3499,
    "Poids" => 200,
    "discount" => 3,
    "Url" => "https://www.cdiscount.com/pdt2/2/1/2/1/700x700/one0761276024212/rw/sans-fil-bluetooth-5-0-casque-led-lumiere-garcon-e.jpg"
  ],
];

  foreach ($products as $product => $features) {         
    foreach ($features as $feature => $value ){
      if ($feature === "Prix"){
        echo $feature. ":" . $value/100 .' € TTC'. "\n";
      }
      elseif ($feature === "Url"){
        echo "<img src= ${features["Url"]} alt= image d'un casque de chat rose><br>";
      } 
      else{
        echo "$feature : $value<br>";

      }
    }
  }  

     
?>