<?php 

    $host = "localhost";
    $dbUser = "Tajul";
    $dbPass = "tajul";
    $dbName = "student";

    $conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    $Sname = $_REQUEST["name"];
    $roll = $_REQUEST["roll"];
    $shift = $_REQUEST["shift"];

    $insertQuery = "INSERT INTO table1 (Sname, roll, shift) VALUES ('$Sname', '$roll', '$shift')";
    $runQuery = mysqli_query($conn, $insertQuery);

    if($insertQuery == true){
        echo "Data inserted successfully";

    }else{
        echo "Data not inserted";
    }
?>