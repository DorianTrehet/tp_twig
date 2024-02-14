<?php
require_once(__DIR__."/include/init_twig.php");
$twig = init_twig();
$template = $twig->load("contact.twig");
$employes = file_get_contents("json/employes.json");
$employes = json_decode($employes, true);
echo $template->render([
    'employes' => $employes,
]);
?>