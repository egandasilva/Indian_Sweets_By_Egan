<?php



// get sweet data from sweet table
function Get_OrderData($ID){
    $conn = include ("DB_connector.php");
    $sql  = "SELECT * FROM `indiaSweet_ordersTB` WHERE `customerID` = '$ID'";
    $result  = $conn->query($sql);
    $row = $result->fetch_array(MYSQLI_BOTH);
    $conn->close();

    return $row;
}

function Set_OrdersData($data){
    $conn = include ("DB_connector.php");
    $sql = "INSERT INTO `indiaSweet_ordersTB` (`customerID`, `orderDate`, `orderStatus`) VALUES ('$data[0]', '$data[1]','$data[2]')";
    if($conn->query($sql) === TRUE){
    }
    else{
        echo "ERROR! Could not process Order";
    }

    $conn->close();
}

function Get_OrderID($data){
    $conn = include ("DB_connector.php");
    $sql = "SELECT `orderID` FROM `indiaSweet_ordersTB` WHERE `customerID` = '$data[0]'";
    $result = $conn->query($sql);

    $rows = mysqli_fetch_all($result, MYSQLI_BOTH);

    $conn->close();
    return $rows[0]["orderID"];

}

function Get_orderDate($ID){
    $conn = include ("DB_connector.php");
    $sql = "SELECT `orderDate` FROM `indiaSweet_ordersTB` WHERE `customerID` = '$ID'";
    $result = $conn->query($sql);

    $rows = mysqli_fetch_all($result, MYSQLI_BOTH);

    $conn->close();
    return $rows[0]["orderDate"];

}

function Get_orderStatus($ID){
    $conn = include ("DB_connector.php");
    $sql = "SELECT `orderStatus` FROM `indiaSweet_ordersTB` WHERE `customerID` = '$ID'";
    $result = $conn->query($sql);

    $rows = mysqli_fetch_all($result, MYSQLI_BOTH);

    $conn->close();
    return $rows[0]["orderStatus"];

}

