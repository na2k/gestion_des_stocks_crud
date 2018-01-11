<?php
// inclusion du fichier de fonctions utilitaires
include_once "libs/utility.php";

// inclusions des fonctions crud pour le module products (utilisateurs)
include_once "modules/products/products-model.php";
// exécution d'une fonction (@utility.php) pour affichage explicite des erreurs PHP
enablePHPMaxErros();

// mettre à jour $base_url ci-dessous avec la route de votre dossier crud1
$base_url = "http://127.0.0.1/simplon/js/tp/tp3_gestion_des_stocks_crud/";

// au chargement de la page
// on récupère tous les utilisateurs stockés en bdd
$products = getProducts();
/*
  ##### Logique de l'application (SYNCHRONE) #####
  on utilise les verbes HTTP get ou post pour
  que le client (le navigateur) puisse envoyer des requêtes au serveur
*/
if (isset($_GET["id"])) {
  $product = getProduct($_GET["id"]);
}

if (isset($_POST["update_product"])) {
  updateProduct();
}

if (isset($_POST["delete_products"]) &&
    isset($_POST["delete_product_ids"]) &&
    count($_POST["delete_product_ids"])) {
        deleteProducts();
}

if (isset($_POST["create_product"])) {
    createProduct();
}
