<?php

include_once "modules/users/users-model.php";

if (isset($_POST["action"])) {


  if ($_POST["action"] === "get_user") {
    echo json_encode(getProduct($_POST["id"]));
  }
}
?>
