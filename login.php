<?php
    $servername="localhost:3307";
    $username="root";
    $password="";
    $dbname="ClickCraft_Photography";
    $uname=$_POST["Uname"];
    $pass=$_POST["password"];

    //Check Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to check if the provided username and password match a record in the database
    $sql = "SELECT * FROM login WHERE UserName='$uname' AND Password='$pass'";
    $result = $conn->query($sql);

    // Check if the query returned a match
    if ($result->num_rows > 0) {
        header("Location: malcolm.php");
        exit();
    } else {
        echo "Error... Wrong username or password";
    }
    $conn->close();
?>