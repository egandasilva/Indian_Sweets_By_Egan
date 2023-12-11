<?php
include ("../PHP/order_confirmation_functions.php");

$fName = $_POST["fName"];
$fName = strtolower($fName);

$sName = $_POST["sName"];
$sName = strtolower($sName);

$pNum = $_POST["pNum"];

$email = $_POST["email"];
$email = strtolower($email);



$street = $_POST["street"];
$street = strtolower($street);

$city = $_POST["city"];
$city = strtolower($city);

$pCode = $_POST["postcode"];
$pCode = strtolower($pCode);

$customer_data = array($fName, $sName, $pNum, $email, $street, $city, $pCode, true);

$sweetID = $_POST["sweetID"]; //get sweet ID

//send customer data to database
$customerID = Insert_customer($customer_data);

//create an order in order database
$orderID = Insert_order($customerID);

//link order with items in respective database
Insert_orderedItems($orderID, $sweetID);

//send email
//send_email($orderID, $customer_data);

?>

<body class="body">
    <div class="box">
        <div class="box_header"> Order Confirmed!</div>
        <div class="box_confirm">
            <div class="box_personal_details">
                <?php
                echo "<p>".strtoupper($fName)." ".strtoupper($sName)."</p>";

                echo "<p>".strtoupper($street)."</p>";
                echo "<p>".strtoupper($city)."</p>";
                echo "<p>".strtoupper($pCode)."</p>";
                ?>
            </div>

            <div class="box_message">
                <p>Thank you for your Order!</p>
                <p>Your order will be shipped to above shipping address.</p>
                <p>You will get Email updates of your Order (Check your spam).</p>
                <?php
                echo "<p>Your order number is <b>#".$orderID."</b> a confirmation email has been sent</p>";

                ?>
            </div>
        </div>

    </div>

    <div class="box_2">
        <div class="box_header"> Pay what you want.</div>
        <div class="box_confirm">
            <div class="box_personal_details">
               <p> Account Name: EGAN DA SILVA</p>
                <p> Sort Code: 04-00-04</p>
                <p> Account Number: 58776509</p>
            </div>
        </div>


    </div>

    <footer>
        A Project by Egan Da Silva <br/>
        Contact: <a href="mailto:egandasilva@gmail.com">egandasilva@gmail.com</a>
    </footer>

</body>