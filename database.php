<?php
try {
$db = new PDO("mysql:host=localhost;dbname=casqueco;charset=utf8",
    'Aly',  'local');
}

catch (Exception $e)
{
    die('Erreur : ' . $e -> getMessage());
}

?>