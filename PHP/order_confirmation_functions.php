<?php
include ("../DAO/indiaCustomer_DAO.php");
include ("../DAO/indiaOrders_DAO.php");
include ("../DAO/indiaOrderedItems_DAO.php");

function Insert_customer($data){
    Set_CustomerData($data);
    return Get_CustomerID($data);
}

function Insert_order($customerID){
    $currentDate = date("Y-m-d");
    $orderStatus = "Not Delivered";
    $orders_data = array($customerID, $currentDate, $orderStatus);

    Set_OrdersData($orders_data);
    return Get_OrderID($orders_data);
}

function Insert_orderedItems($orderID, $sweetID){
    $orderedItems = array($orderID, $sweetID);
    Set_OrderedItems($orderedItems);
}

function send_email($orderID, $data){
    $message = "Thank you for your Order!". "\n". "Your order number is #".$orderID."\n". "It will be shipped to: "."\n".$data[4]. "\n".$data[5]."\n"."$data[6]";
    $message = wordwrap($message);
    mail($data[3], "Indian Fudge", $message);

}