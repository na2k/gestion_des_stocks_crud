<?php

$db = connectDB("127.0.0.1", "gestion_stock_crud", "root", "");

function getProduct($id) {
  global $db;
  $sql = "SELECT * FROM produits WHERE id = :id";
  $statement = $db->prepare($sql);
  $statement->bindParam(":id", $id, PDO::PARAM_INT);
  $statement->execute();
  return $statement->fetch(PDO::FETCH_OBJ);
}

function getProducts() {
  global $db;
  $sql = "SELECT * FROM produits";
  $exec = $db->query($sql);
  return $exec->fetchAll(PDO::FETCH_OBJ);
}

function updateProduct() {
  global $db;

  $sql = "UPDATE produits SET prix = :prix, nom = :nom, image = :image, description = :description WHERE id = :id";

  $image = $_POST["image"] !== "" ? (int)$_POST["image"] : null;
  $description = $_POST["description"] !== "" ? $_POST["description"] : null;

  $statement = $db->prepare($sql);
  $statement->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
  $statement->bindParam(":prix", $_POST["prix"], PDO::PARAM_INT);
  $statement->bindParam(":nom", $_POST["nom"], PDO::PARAM_STR);
  $statement->bindParam(":description", $description, PDO::PARAM_STR);
  $statement->bindParam(":image", $image, PDO::PARAM_LOB);
  $check = $statement->execute();
}

function deleteProducts() {
  global $db;

  foreach ($_POST["delete_product_ids"] as $id) {
    // debug($id);
    $sql = "DELETE FROM produits WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(":id", $id, PDO::PARAM_INT);
    $res = $statement->execute();
    $msg_crud = ($res === true) ? "suppression ok" : "soucis suppression";
  }
  header("Location: index.php");
}

function createProduct() {
  global $db;

  $sql = "INSERT INTO produits (nom, prix, description, image)
    VALUES (:nom, :prix, :description, :image)";

  $statement = $db->prepare($sql);
  $statement->bindParam(":nom", $_POST["nom"], PDO::PARAM_STR);
  $statement->bindParam(":prix", $_POST["prix"], PDO::PARAM_STR);
  $statement->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
  $statement->bindParam(":image", $_POST["image"], PDO::PARAM_LOB);
//   while($statement->fetch())
// {
//  file_put_contents($id.".jpg",$_POST["image"]);
//  echo "<img src='".$id.".jpg'> <br/>";
// }
  $res = $statement->execute();
  $msg_crud = ($res === true) ? "insertion ok" : "soucis à l'insertion";
  header("Location: index.php");
}
