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
    $sql = "INSERT INTO `indiaSweet_customerTB` (fName, sName, pNumber, email, street, city, postcode) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s,s,s,s,s,s", $data[0], $data[1],$data[2], $data[3],$data[4], $data[5]);

    if (!($stmt->execute())) {
        echo "failed to add to database";
    }
    $stmt->close();

    $conn->close();
}


