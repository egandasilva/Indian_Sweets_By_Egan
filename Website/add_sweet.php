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
    <div class="nav_child_active"> <a href="add_sweet.php">Add Sweet</a></div>
    <div class="nav_child"><a href="viewOrder.php">View Orders</a></div>
    <div class="nav_child"><a href="">Delivery Mode</a></div>
</div>

<div class="main_grid">
    <?php
    if(isset($_POST["name"])){
        include("../PHP/add_sweet_functions.php");
    }
    ?>

    <div class="main_grid_header_1">Add Sweet</div>

    <div class="sweet_table">
        <div class="table_header">Name:</div>
        <div class="table_header">Description:</div>
        <div class="table_header">Ingredients:</div>
        <div class="table_header">Allergies:</div>
        <div class="table_header">Add Image:</div>

        <form method="post" name="Add_Sweet" action="add_sweet.php" enctype="multipart/form-data">
            <div class="table_data"> <input name="name" type="text" required></div>
            <div class="table_data"> <textarea name="desc"  rows="10" cols="30" required> </textarea></div>
            <div class="table_data"> <textarea name="ingredients"  rows="10" cols="30" required> </textarea></div>
            <div class="table_data"> <textarea name="allergies" rows="10" cols="30" required> </textarea></div>
            <div class="table_data"> <input id="img" name="image" type="file" accept="imagee/*"></div>
            <button type="submit" class="addButt">+</button>
        </form>
    </div>


<!--    <footer>-->
<!--        A Project by Egan Da Silva <br/>-->
<!--        Contact: <a href="mailto:egandasilva@gmail.com">egandasilva@gmail.com</a>-->
<!--    </footer>-->

</div>





</body>
</html>
