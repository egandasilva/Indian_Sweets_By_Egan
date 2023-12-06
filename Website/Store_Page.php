<?php
//connect to database
$connection = include ("../DAO/DB_connector.php");

if($connection->connect_error){
    echo"error with connetion to database";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/StorePage_Style.css">
    <meta charset="UTF-8">
    <title>Store Page</title>
</head>
<body class="webPage_grid">
<!--header-->
<div class="header_grid">
    <div class="header_title_1"> Indian Fudge</div> <div class="header_title_2">By Egan</div>
</div>

<!--Basket button-->
<div class="basket_grid">

</div>

<!--main area-->
<div class="main_grid">
Main
</div>

<!--footer-->
<div class="footer_grid">
    A Project by Egan Da Silva <br/>
    Contact: <a href="mailto:egandasilva@gmail.com">egandasilva@gmail.com</a>
</div>
</body>
</html>
