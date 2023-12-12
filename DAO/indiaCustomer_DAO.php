<?php



// get sweet data from sweet table
function Get_CustomerData()
{
    $conn = include ("DB_connector.php");
    $sql = "SELECT * FROM `indiaSweet_customerTB`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //create shopping page
        $rows = mysqli_fetch_all($result, MYSQLI_BOTH);
        return $rows;
    } else {
        echo "Empty Orders Table";
    }

    $conn->close();
}

function Set_CustomerData($data)
{
    $conn = include ("DB_connector.php");
    $sql = "INSERT INTO `indiaSweet_customerTB` (`fName`, `sName`, `pNumber`, `email`, `street`, `city`, `postcode`, `T_C`) VALUES ( '$data[0]', '$data[1]','$data[2]', '$data[3]','$data[4]', '$data[5]', '$data[6]', '$data[7]')";

    if($conn->query($sql) === TRUE){
    }
    else{
        echo "ERROR! Could not process Order";
    }

    $conn->close();
}

function Get_CustomerID($data){
    $conn = include ("DB_connector.php");
    $sql = "SELECT `customerID` FROM `indiaSweet_customerTB` WHERE `fName` = '$data[0]' AND `sName` = '$data[1]' AND `pNumber` = '$data[2]' AND `email` = '$data[3]'";
    $result = $conn->query($sql);

    $rows = mysqli_fetch_all($result, MYSQLI_BOTH);

    $size = sizeof($rows);

    $conn->close();
    return $rows[$size-1]["customerID"];

}

function Get_CustomerData_ID($ID){
    $conn = include ("DB_connector.php");
    $sql = "SELECT * FROM `indiaSweet_customerTB` WHERE `customerID` = '$ID'";
    $result  = $conn->query($sql);
    $row = $result->fetch_array(MYSQLI_BOTH);
    $conn->close();

    return $row;

}