<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/orderPage_Style.css">
    <script type="text/javascript" src="../JS_Files/terms_conditions.js"></script>
    <script type="text/javascript" src="../JS_Files/error_checking.js"></script>

    <meta charset="UTF-8">
    <title>Order Page</title>
</head>

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
    <div class="main_grid_header_1">View Orders</div>

    <div class="order_table">
        <div class="table_header">OrderID:</div>
        <div class="table_header">CustomerID:</div>
        <div class="table_header">First Name:</div>
        <div class="table_header">Surname:</div>
        <div class="table_header">Date of Order:</div>
        <div class="table_header">Order Status:</div>

        <?php
            include ("../DAO/indiaCustomer_DAO.php");
            include ("../DAO/indiaOrders_DAO.php");
            $customerRows = Get_CustomerData();

            for($i = 0; $i<sizeof($customerRows); $i++){
                echo '<form action="customer_orderForm.php" method="post">';
                echo '<button type="submit" name="customerID" value='.$customerRows[$i]["customerID"].'>';
                echo '<div class="table_data">'.Get_OrderID($customerRows[$i]).'</div>';
                echo '<div class="table_data">'.$customerRows[$i]["customerID"].'</div>';
                echo '<div class="table_data">'.$customerRows[$i]["fName"].'</div>';
                echo '<div class="table_data">'.$customerRows[$i]["sName"].'</div>';
                echo  '<div class="table_data">'.Get_orderDate($customerRows[$i]["customerID"]).'</div>';
                echo  '<div class="table_data">'.Get_orderStatus($customerRows[$i]["customerID"]).'</div>';
                echo  '</button>';
                echo '</form>';
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
