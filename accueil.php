<?php
require_once(__DIR__."/include/init_twig.php");
$twig = init_twig();
$template = $twig->load("accueil.twig");
$produits = file_get_contents("json/produits.json");
$produits = json_decode($produits, true);
echo $template->render([
    'produits' => $produits,
]);
?>