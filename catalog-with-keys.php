<?php
$chatcasqueRose= [
    "Nom" => "Le chatcasque Rose",
    "Prix" => 3275,
    "Poids" => "200",
    "discount" => 10,
    "Url" => "https://www.cdiscount.com/pdt2/1/4/7/3/700x700/hom0753308545147/rw/casque-d-oreille-chat-casque-sans-fil-pliable-casq.jpg",
];

$chatcasqueViolet = [
    "Nom" => "Le chatcasque Violet",
    "Prix" => 3499,
    "Poids" => 200,
    "discount" => 3,
    "Url" => "https://www.cdiscount.com/pdt2/2/1/2/1/700x700/one0761276024212/rw/sans-fil-bluetooth-5-0-casque-led-lumiere-garcon-e.jpg",];

        foreach ($chatcasqueRose as $Caracteristique => $value) {
            

            if ($Caracteristique === "Url"){
              echo "<img src=" . $chatcasqueRose["Url"] . " alt= image d'un casque de chat rose>" ;
            }
            elseif ($Caracteristique === "Prix"){
              echo $Caracteristique . ":" . $value/100 .' €';
            }
            else{
              echo $Caracteristique . ":" . $value . "<br>" ;
            } 


        }
        foreach ($chatcasqueViolet as $Caracteristique2 => $value2) {
            

            if ($Caracteristique2 === "Url"){
              echo "<img src=" . $chatcasqueViolet["Url"] . " alt= image d'un casque de chat rose>" ;
            }
            elseif ($Caracteristique2 === "Prix"){
              echo $Caracteristique2 . ":" . $value2/100 .' €' . "\n";
            }
            else{
              echo $Caracteristique2 . ":" . $value2 . "<br>" ;
            }


      }    
      
?>