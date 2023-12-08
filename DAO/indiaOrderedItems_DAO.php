<?php

// get sweet data from sweet table
function Get_OrderedItems()
{
    $conn = include ("DB_connector.php");
    $sql = "SELECT * FROM `indiaSweet_orderedItemsTB`";
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

function Set_OrderedItems($data)
{
    $conn = include ("DB_connector.php");
    $sql = "INSERT INTO `indiaSweet_orderedItemsTB` (orderID, sweetID) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i,i", $data[0], $data[1]);

    if (!($stmt->execute())) {
        echo "failed to add to database";
    }
    $stmt->close();

    $conn->close();
}


