<?php


if(count($_POST)>0){
  $product = new RRHHData();
  $product->nrodoc = $_POST["nrodoc"];
  $product->nombre = $_POST["nombre"];
  $product->user_id = $_SESSION["user_id"];

  $prod= $product->add();

print "<script>window.location='index.php?view=RRHH';</script>";


}


?>