<?php require "my-functions.php"; 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<!-- Contact Section-->
<section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Nos Vedettes</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="card_catalog"> 
                 <?php showsProduct($products) ?>
                  <?php
                  $test = false;
                  if ($test) {
                  ?>
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images_casques\casque_MontBlanc.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Casque over-ear Montblanc MB 01</h5>
                      <p class="card-text">Le casque over-ear Montblanc MB 01 est conçu pour répondre à la demande croissante de nos clients à la recherche de plus de confort lors de réunions prolongées, de qualité sonore et d'expérience haptique.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Coloris : Noir</li>
                      <li class="list-group-item">600  €</li>
                      <li class="list-group-item">Réduction </li>
                    </ul>
                  </div>
                  <?php
                  }   
                  ?>
</div>
                    </div>
                </div>
            </div>
        </section>


</body>
</html>

