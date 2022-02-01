<?php
    $nom = "Air Pods Max";
    $prix = 600.00;
    $img = "https://www.google.fr/imgres?imgurl=https%3A%2F%2Fstore.storeimages.cdn-apple.com%2F4668%2Fas-images.apple.com%2Fis%2Fairpods-max-select-skyblue-202011_FMT_WHH%3Fwid%3D1200%26hei%3D630%26fmt%3Djpeg%26qlt%3D95%26.v%3D1604686090000&imgrefurl=https%3A%2F%2Fwww.apple.com%2Ffr%2Fshop%2Fbuy-airpods%2Fairpods-max%2Fbleu-ciel&tbnid=cpUp4Lx4c3CVfM&vet=12ahUKEwjnndTYn971AhVKyBQKHZg3Bd8QMygCegUIARC-AQ..i&docid=iIUinbElcF1qYM&w=1200&h=630&q=air%20pods%20max&safe=active&ved=2ahUKEwjnndTYn971AhVKyBQKHZg3Bd8QMygCegUIARC-AQ";

    include "header.php";
    echo "<h1>$nom</h1>";
    echo "<p>$prix €</p>";
    echo "<img src=\"$img\" alt=\"AirPodsMax\" width=\"222\">";
    include "footer.php";
?>
