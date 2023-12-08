<?php

function Get_SweetData(){
    $conn = include ("DB_connector.php");
    $sql  = "SELECT * FROM `indiaSweet_sweetTB`";
    $result  = $conn->query($sql);

    if($result->num_rows >0) {
        //create shopping page
        $rows = mysqli_fetch_all($result, MYSQLI_BOTH);
        return $rows;
    }
    else{
        echo "Empty Sweet Table";
    }
}

function Set_SweetData($data){
    $conn = include ("DB_connector.php");

    $sql = "INSERT INTO `indiaSweet_sweetTB` (name, description, ingredients, allergies, image) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $data[0],$data[1],$data[2],$data[3]);

    if(!($stmt->execute())){
        echo "failed to add to database";
    }
    $stmt->close();

    $conn->close();
}

function Get_SweetData_ID($ID){
    $conn = include ("DB_connector.php");
    $sql = "SELECT * FROM `indiaSweet_sweetTB` WHERE sweetID = $ID";
    $result  = $conn->query($sql);
    $row = $result->fetch_array(MYSQLI_NUM);
    $conn->close();

    return $row;
}
