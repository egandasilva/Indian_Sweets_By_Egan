<?php



// get sweet data from sweet table
function Get_OrdersData(){
    $conn = include ("DB_connector.php");
    $sql  = "SELECT * FROM `indiaSweet_ordersTB`";
    $result  = $conn->query($sql);

    if($result->num_rows >0) {
        //create shopping page
        $rows = mysqli_fetch_all($result, MYSQLI_BOTH);
        return $rows;
    }
    else{
        echo "Empty Orders Table";
    }

    $conn->close();
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

