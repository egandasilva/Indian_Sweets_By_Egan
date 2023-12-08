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
    $sql = "INSERT INTO `indiaSweet_ordersTB` (customerID, orderDate, orderStatus) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i,s,s", $data[0],$data[1],$data[2]);

    if(!($stmt->execute())){
        echo "failed to add to database";
    }
    $stmt->close();

    $conn->close();
}


