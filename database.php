<?php
try {
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=casque_&_co;charset=utf8',
    'Aly',
    'local'
);}

catch (Exception $e)
{
    die('Erreur : ' . $e -> getMessage());
}

?>