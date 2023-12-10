<?php
include ("../DAO/indiaSweet_DAO.php");

$sweetID = $_POST["sweetID"]; //get sweet ID

$orderDetails = Get_SweetData_ID($sweetID); //get sweet details
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/orderPage_Style.css">
    <script type="text/javascript" src=""></script>
    <meta charset="UTF-8">
    <title>Order Page</title>
</head>

<body class="webPage_grid">

<!--header-->
<div class="header_grid">
    <div class="header_title_1"> Indian Fudge</div> <div class="header_title_2">By Egan</div>
</div>

<!--Other title-->
<div class="title_grid">
    Your Order
</div>

<div class="empty_grid">
</div>


<!--Main AREA-->
<div class="main_grid">

<!--        Order Form-->
    <form name="order_form" method="post" action="">
        <div class="main_grid_inner_1">
<!--        Personal Details-->
        <div class="main_child_1">
            <div class="main_child_header"> Personal Details</div>
            <div class="main_child_title"> First Name:<br/> <input type="text" name="fName" id="fName"></div>
            <div class="main_child_title"> Surname:<br/> <input type="text" name="sName" id="sName"></div>
            <div class="main_child_title"> Phone Number:<br/>  <input type="text" name="pNum" id="pNum"></div>
            <div class="main_child_title"> Email:<br/>  <input type="text" name="email" id="email"></div>
        </div>

<!--        Delivery Details-->
        <div class="main_child_1">
            <div class="main_child_header"> Delivery Address</div>
            <div class="main_child_title"> Street:<br/>  <input type="text" name="street" id="street"></div>
            <div class="main_child_title"> City: <br/> <input type="text" name="city" id="city"></div>
            <div class="main_child_title"> Postcode: <br/> <input type="text" name="postcode" id="postcode"></div>
        </div>
<!--        button -->
        <div class="main_child_2">
            <div class="main_child_TC"> Agree to the <a class="main_child_TC_link" onclick="">Terms & Conditions</a>:<input type="checkbox" name="TC" id="TC"></div>
            <button type="submit" onclick="return errorChecking()"> Buy</button>
        </div>
        </div>
    </form>



<!--    Their Order-->
    <div class="main_grid_inner_2">
        <div class="main_child_header"> Your Order:</div>

        <div class="main_child_box">
        <?php
        echo '<div class="main_child2"><img alt="No Image Available" src="data:image/jpeg;base64,'.base64_encode($orderDetails[5]).'"/> </div>';
        echo '<div class="main_child2"> <p class="main_child2_title">'.$orderDetails[1].'</p> <p>'.$orderDetails[2].'</p> </div>'

            ?>
        </div>
    </div>

    <footer>
        A Project by Egan Da Silva <br/>
        Contact: <a href="mailto:egandasilva@gmail.com">egandasilva@gmail.com</a>
    </footer>
</div>


</body>


</html>