<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/orderPage_Style.css">
    <script type="text/javascript" src="../JS_Files/terms_conditions.js"></script>
    <script type="text/javascript" src="../JS_Files/error_checking.js"></script>

    <meta charset="UTF-8">
    <title>Order Page</title>
</head>
<?php
include ("../DAO/indiaCustomer_DAO.php");
include ("../DAO/indiaOrders_DAO.php");
include ("../DAO/indiaOrderedItems_DAO.php");
include ("../DAO/indiaSweet_DAO.php");

$customerID = $_POST["customerID"];
$customerData = Get_CustomerData_ID($customerID);
$orderData = Get_OrderData($customerID);
$orderedItem_data = Get_OrderedItems($orderData[0]);

?>

<body class="webPage_grid">

<!--header-->
<div class="header_grid">
    <div class="header_title_1">Indian Fudge</div> <div class="header_title_2">By Egan</div>
</div>

<!--Other title-->
<div class="title_grid">
    Admin Page
</div>

<div class="empty_grid">
</div>

<div class="nav_grid">
    <div class="nav_child"> <a href="add_sweet.php">Add Sweet</a></div>
    <div class="nav_child_active"><a href="viewOrder.php">View Orders</a></div>
    <div class="nav_child"><a href="">Delivery Mode</a></div>
</div>

<div class="main_grid">
    <div class="main_grid_header_1">Customer Order Form</div>

    <div class="main_child_customer">
        <?php
        echo '<div class="child_ID">'.$customerData["customerID"].'</div>';
        echo '<div class="child_fName">'.strtoupper($customerData["fName"]).'</div>';
        echo '<div class="child_sName">'.strtoupper($customerData["sName"]).'</div>';

        echo '<div class="child_contact">'.$customerData["pNumber"].'</div>';
        echo '<div class="child_contact">'.$customerData["email"].'</div>';

        echo '<div class="child_street">'.strtoupper($customerData["street"]).'</div>';
        echo '<div class="child_city">'.strtoupper($customerData["city"]).'</div>';
        echo '<div class="child_postcode">'.strtoupper($customerData["postcode"]).'</div>';
        ?>
    </div>

    <div class="main_child_orderData">
        <?php
        echo '<div class="child_ID">'.$orderData["orderID"].'</div>';
        echo '<div class="child_orderDate">'.$orderData["orderDate"].'</div>';
        echo '<div class="child_orderStatus">'.$orderData["orderStatus"].'</div>';
        ?>
    </div>

    <div class="main_child_sweetData">
        <?php
            for($i=0; $i<sizeof($orderedItem_data);$i++){
                $sweetData = Get_SweetData_ID($orderedItem_data[$i]["sweetID"]);
                echo '<div class="child_ID">'.$sweetData["sweetID"].'</div>';
                echo '<div class="child_name">'.$sweetData["name"].'</div>';
            }
        ?>
    </div>

    <!--    <footer>-->
    <!--        A Project by Egan Da Silva <br/>-->
    <!--        Contact: <a href="mailto:egandasilva@gmail.com">egandasilva@gmail.com</a>-->
    <!--    </footer>-->

</div>





</body>
</html>