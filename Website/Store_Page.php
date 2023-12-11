<?php

include ("../DAO/indiaSweet_DAO.php");

$sweetsData = Get_SweetData();


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
    <?php
    echo '<div class="main_grid_inner">';
        for($i = 0 ; $i<sizeof($sweetsData); $i++){
            echo '<div class="main_child">';
                echo '<img alt="No Image Available" src="data:image/jpeg;base64,'.base64_encode($sweetsData[$i]["image"]).'"/>';
                echo '<div class="main_child_name">'.$sweetsData[$i]["name"].'</div>';
                echo '<div class="main_child_desc">'.$sweetsData[$i][2].'</div>';
            echo '<div class="main_child_ingred"> <div class="title">Indgredients: </div>'.$sweetsData[$i][3].'</div>';
            echo '<div class="main_child_allergy"> <div class="title">Allergies: </div>'.$sweetsData[$i]["allergies"].'</div>';

            echo '<form name = "" method = "post" action = "order.php" >';
            echo '<button type = "submit" name="sweetID" value='.$sweetsData[$i][0].'> Buy</button >';
            echo'</form >';
            echo  '</div>';
        }
    echo '</div>';
    ?>

</div>

<!--footer-->
<footer class="footer_grid">
    A Project by Egan Da Silva <br/>
    Contact: <a href="mailto:egandasilva@gmail.com">egandasilva@gmail.com</a>
</footer>
</body>
</html>
