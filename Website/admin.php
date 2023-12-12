<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/adminPage_Style.css">
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

<?php

function login_template(){
    ?>
    <div class="main_header_1">Password:</div>
    <form method="post" action="admin.php"  name="passwordForm">
        <input  type="password" name="pass" id="pass" placeholder="(required)"> <br/>
        <button type="submit" name="submit_pass">Submit</button>
    </form>
<?php
}


$pasword = isset($_POST["pass"]) ? $_POST["pass"] : "";
$key = "1234";


if($pasword === $key or isset($_SESSION["loggedIN"])){

    $_SESSION["loggedIN"] = true;
    ?>

    <div class="nav_grid">
        <div class="nav_child"> <a href="add_sweet.php">Add Sweet</a></div>
        <div class="nav_child"><a href="viewOrder.php">View Orders</a></div>
        <div class="nav_child"><a href="">Delivery Mode</a></div>
    </div>

<?php
}
elseif (empty($pasword)){
    echo "<div class='main_grid_password'>";
    login_template();
    echo "</div>";
}
else{
    echo "<div class='main_grid_password'>";
    echo "<div class='main_header_2'>Incorrect Password!</div>";
    login_template();
    echo "</div>";
}
?>




</body>