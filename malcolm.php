<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malcom Lismore</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: #081b29;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            text-align: left;
        }
        th {
            background-color: #0ef;
            color: white;
        }

    </style>
</head>
<body>
    <a href="index.php" class="btn">Click to upload images</a><br><br>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Whatsapp No.</th>
            <th>Event Date</th>
            <th>Event Type</th>
            <th>Special Request</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost:3307", "root", "", "ClickCraft_Photography");
        if ($conn-> connect_error) {
            die ("connection failed: ".$conn-> connect_error);
        }

        $sql = "SELECT FirstName, LastName, Email, Address, WhatsappNo, DateofEvent, EventType, SpecialRequest FROM enquiry";
        $result = $conn -> query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["FirstName"]. "</td><td>".$row["LastName"]. "</td><td>".$row["Email"]. "</td><td>".$row["Address"]. "</td><td>".$row["WhatsappNo"]. "</td><td>".$row["DateofEvent"]. "</td><td>".$row["EventType"]. "</td><td>".$row["SpecialRequest"]. "</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>