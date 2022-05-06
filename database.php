<?php
try {
$db = new PDO("mysql:host=localhost;dbname=casqueandco;charset=utf8",
    'Aly',  'local');
}

catch (Exception $e)
{
    die('Erreur : ' . $e -> getMessage());
}


function bddCatalog($db) {
    $catalog = 'SELECT * FROM products';
    $catalogStatement = $db->prepare($catalog);
    $catalogStatement->execute();
    $catalogProducts = $catalogStatement->fetchAll();
    return $catalogProducts;
}
foreach ($catalogProducts as $product){
?>
    <p> <img src=" <?php echo $product['image']; ?>" alt=""> </p>
    <p> <?php echo $product['name']; ?> </p>
    <p> <?php echo $product['description']; ?> </p>
    <p> <?php echo $product['price']; ?> </p>
    

    <?php
}

    ?>



