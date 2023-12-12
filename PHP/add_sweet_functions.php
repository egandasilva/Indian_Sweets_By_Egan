<?php

include("../DAO/indiaSweet_DAO.php");

$name = $_POST["name"];
$desc = $_POST["desc"];
$ingredients = $_POST["ingredients"];
$allergies = $_POST["allergies"];

$imageData = null;
if(isset($_FILES["image"])){
    $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
}

$sweet_data = array($name, $desc, $ingredients, $allergies, $imageData);

Set_SweetData($sweet_data);