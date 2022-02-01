<?php
$AirPodsMax= [
    "Nom" => "Airpods Max gris",
    "Prix" => 60000,
    "Poids" => "200",
    "discount" => 10,
    "description" => "Voici les AirPods Max. L’accord parfait entre un son haute‑fidélité enivrant et la magie intuitive des AirPods. Préparez‑vous pour une expérience d’écoute inouïe.",
    "Url" => "https://www.cdiscount.com/pdt2/9/6/8/1/700x700/app194252244968/rw/airpods-max-gris-sideral.jpg",
];

$Montblanc = [
    "Nom" => "Casque over-ear Montblanc MB 01",
    "Prix" => 59500,
    "Poids" => 200,
    "discount" => 3,
    "description" => "Le casque over-ear Montblanc MB 01 est conçu pour répondre à la demande croissante de nos clients à la recherche de plus de confort lors de réunions prolongées, de qualité sonore et d'expérience haptique.<br> Réalisé en cuir, il se pare de coussinets confortables et d'une technologie moderne pour permettre à nos clients de passer des appels des heures durant, de se détendre tout en écoutant leurs chansons préférées ou de rester concentrés grâce à la réduction de bruit active.",
    "Url" => "https://www.montblanc.com/variants/images/19971654707321841/A/w2500.jpg",];

    $BeyerDynamic = [
      "Nom" => "BEYERDYNAMIC DT 880 PRO",
      "Prix" => 25000,
      "Poids" => 200,
      "discount" => 30,
      "description" => "Le Beyerdynamic DT880 Pro est un casque circum-auriculaire de type semi-ouvert adoptant une impédance de 250 Ohms. <br> 
        Il se démarque du DT880 Edition par un arceau ajustable plus ferme et un long câble spiralé. Il trouvera idéalement sa place en studio, dans le cadre de longues sessions d’enregistrement et de mixage.<br> Egalement adapté à un usage hi-fi, ce casque studio est apprécié dans le monde entier pour son grave précis, son médium équilibré, et son aigu cristallin. Un must have !",
      "Url" => "https://cdn3.cobra.fr/65913/800x800/image.jpg",];

        foreach ($AirPodsMax as $Clé => $Valeur) {
            

            if ($Clé === "Url"){
              echo "<img src=" . $AirPodsMax["Url"] . " alt= image d'un casque de chat rose >" ;
            }
            elseif ($Clé === "Prix"){
              echo $Clé . ":" . $Valeur/100 .' €';
            }
            else{
              echo "<p>" . $Clé . ":" . $Valeur. "<br>" ."</p>";
            } 


        }
        foreach ($Montblanc as $Clé => $Valeur) {
            

            if ($Clé === "Url"){
              echo "<img src=" . $Montblanc["Url"] . " alt= image d'un casque de chat rose>" ;
            }
            elseif ($Clé === "Prix"){
              echo $Clé . ":" . $Valeur/100 .' €' . "\n";
            }
            else{
              echo "<p>" . $Clé . ":" . $Valeur . "<br>"."</p>" ;
            }


      }    
      foreach ($BeyerDynamic as $Clé => $Valeur) {
            

        if ($Clé === "Url"){
          echo "<img src=" . $BeyerDynamic["Url"] . " alt= image d'un casque de chat rose >" ;
        }
        elseif ($Clé === "Prix"){
          echo $Clé . ":" . $Valeur/100 .' €';
        }
        else{
          echo "<p>" . $Clé . ":" . $Valeur. "<br>" ."</p>";
        }
      }   
?>