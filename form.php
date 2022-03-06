
  <!-- Contact Section-->
  <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Commandez</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
        
                        <form action="submit_form.php" method="post">                                                                                                  
                            <div class="bd-example">
                                <!-- <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Article</th>
                                        <th scope="col">Quantité</th>
                                        <th scope="col">Pièce</th>                                        
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        <tr>
                                        <?php
                                        echo '<th scope="row">' .'</th>';
                                        echo '<pre>';
                                        showShoppingCart(bddCatalog($db));
                                        
                                        echo '</pre>';                                      
                                        ?>
                    
                                        <!-- <th scope="row"></th>
                                        <td>Montblanc over-ear MB 01</td>
                                        <td><input name="Montblanc MB 01" type="number" class="form-control" placeholder="0" id="exampleInput" ></td>
                                       
                                        <td>595 €</td>
                                        <td><button type="submit" class="btn btn-primary">COMMANDER</button></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td>BeyerDynamic DT 770 PRO</td>
                                        <td><input name="BeyerDynamic DT-770 Pro 80 Ohm" type="number" class="form-control" placeholder="0" id="exampleInput" ></td>
                                        
                                        <td>100 €</td>
                                      <td><button type="submit" class="btn btn-primary">COMMANDER</button></td> -->
                                        <!-- </tr> -->
                                    <!-- </tbody>
                                </table>-->
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </section>