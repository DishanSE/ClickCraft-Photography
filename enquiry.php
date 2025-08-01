<?php
    $servername="localhost:3307";
    $username="root";
    $password="";
    $dbname="ClickCraft_Photography";
    $Firstname=$_POST["fname"];
    $Lastname=$_POST["lname"];
    $Email=$_POST["email"]; 
    $Address=$_POST["address"];
    $WhatsappNo=$_POST["w_no"];
    $EventDate=$_POST["date"];
    $EventType=$_POST["event_type"];
    $SpecialRequest=$_POST["s_req"];

    //Check Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection falied: ".$conn->connect_error);
    }
    $sql="INSERT INTO enquiry (FirstName, LastName, Email, Address, WhatsappNo, DateofEvent, EventType, SpecialRequest) 
    VALUES ('$Firstname', '$Lastname', '$Email', '$Address', '$WhatsappNo', '$EventDate', '$EventType', '$SpecialRequest')";

    if ($conn->query($sql) === TRUE) {
        echo "New Record Created Successfully";
    }
    else {
        echo "Error".$sql."<br>".$conn->error;
    }
    $conn->close();
?>