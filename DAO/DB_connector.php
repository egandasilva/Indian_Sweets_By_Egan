<?php

//connect to database
$servername = "devweb2023.cis.strath.ac.uk";
$username = "nfb20144";
$password = "quee2Aegh5da";
$dbname = $username;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //FIXME only use during debugging
}
else{

    return $conn;
}

