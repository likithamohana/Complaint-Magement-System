<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 8px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

img {
    max-width: 150px;
    max-height: 150px;
}

h1 {
    text-align: center;
    font-size: 24px;
    margin: 20px 0;
}

/* Add more CSS rules as needed */
</style>
</head>

<body>

<?php    
session_start();
    if(!$_SESSION['user_login']){
        echo "<script>window.location.href='user_login.php';</script>";
    }

$host = "localhost";
$dbuser = "root";
$pwd = "";
$dbname = "cms";

$conn = new mysqli($host, $dbuser, $pwd, $dbname);

$user=$_SESSION['username'];
$sql = "SELECT * FROM bus_complaints where username='$user'";

echo "<h1>COMPLAINTS ON BUSES</h1>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>busNo</th><th>date</th><th>arrivalTime</th><th>departureTime</th><th>ticketID</th><th>complaint</th><th>ticketProof</th><th>status</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['busNo'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['arrivalTime'] . "</td>";
        echo "<td>" . $row['departureTime'] . "</td>";
        echo "<td>" . $row['ticketID'] . "</td>";
        echo "<td>" . $row['complaint'] . "</td>";
        echo "<td><img src='bus_tickets/" . $row['ticketProof'] . "' width='150' height='150'></td>";

        echo "<td>" . $row['status'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

$sql = "SELECT * FROM train_complaints where username='$user'";

echo "<h1>COMPLAINTS ON TRAINS</h1>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>trainNo</th><th>trainName</th><th>date</th><th>arrivalTime</th><th>departureTime</th><th>ticketID</th><th>seatNO</th><th>ticketProof</th><th>complaint</th><th>status</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['trainNo'] . "</td>";
        echo "<td>" . $row['trainName'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['arrivalTime'] . "</td>";
        echo "<td>" . $row['departureTime'] . "</td>";
        echo "<td>" . $row['ticketID'] . "</td>";
        echo "<td>" . $row['seatNO'] . "</td>";
        echo "<td><img src='train_tickets/" . $row['ticketProof'] . "' width='150' height='150'></td>";
        echo "<td>" . $row['complaint'] . "</td>";
        echo "<td>".$row['status']."</td>";
        //echo "<td>"."<button id='solved' name='solved'>solved</button>"."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>