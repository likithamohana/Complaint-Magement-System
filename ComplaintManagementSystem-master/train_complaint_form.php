<?php
    session_start();
    if(!$_SESSION['user_login']){
        echo "<script>window.location.href='user_login.php';</script>";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Complaint Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://blog.ipleaders.in/wp-content/uploads/2016/08/complaint.jpg');
            margin: 0;
            padding: 0;
        }
    
        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin: 0;
        }
    
        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    
        label {
            display: block;
            font-weight: bold;
        }
    
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
    
</head>
<body>
    <h1>Railway Complaint Form</h1>
    <form method="POST" action='' enctype="multipart/form-data">
        

        <fieldset>
            <center><h2><u>VEHICLE DETAILS</u></center>
        <label for="train_name">Train Name:</label>
        <input type="text" id="train_name" name="train_name" required><br><br>

        <label for="train_number">Train Number:</label>
        <input type="text" id="train_number" name="train_number" required><br><br>

        <label for="complaint">Complaint:</label><br>
        <textarea id="complaint" name="complaint" rows="4" required></textarea><br><br>

        <label for="date">Date of Tarvel:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Time of Arrival:</label>
        <input type="time" id="time1" name="time1" required><br><br>

        <label for="time">Time of Departure:</label>
        <input type="time" id="time2" name="time2" required><br><br>

        <label for="location">Start Location:</label>
        <input type="text" id="location1" name="location1" required><br><br>

        <label for="location">Destination Location:</label>
        <input type="text" id="location2" name="location2" required><br><br>


        <label for="ticket_id">Ticket_id:</label>
        <input type="text" id="ticket_id" name="ticket_id" required><br><br>

        <label for="Seat_number">Seat Number:</label>
        <input type="text" id="Seat_number" name="Seat_number" required><br><br>

        <label for="attachment">Ticket (attachment):</label>
        <input type="file" id="attachment" name="attachment"><br><br>

        </fieldset>

        <br>

        <input type="submit" id="complaintSubmit" name="complaintSubmit" >
    </form>
</body>
</html>

<?php
    if(isset($_POST['complaintSubmit'])){
        $username=$_SESSION['username'];
        $trainNo=$_POST["train_number"];
        $trainName=$_POST["train_name"];
        $date=$_POST['date'];
        $at=$_POST['time1'];
        $dt=$_POST['time2'];
        $ticketID=$_POST['ticket_id'];
        $seatNo=$_POST['Seat_number'];
        $complaint=$_POST['complaint'];

        $img=$_FILES['attachment']['name'];
        $img2=$_FILES['attachment']['tmp_name'];
        $target_path="train_tickets/";
        move_uploaded_file($img2, $target_path.$img);

        $host="localhost";
        $dbuser="root";
        $pwd="";
        $dbname="cms";

        $conn=new mysqli($host,$dbuser,$pwd,$dbname);
        $st="insert into train_complaints values('$username','$trainNo','$trainName','$date','$at','$dt','$ticketID','$seatNo','$img','$complaint','pending');";
        $status=$conn->query($st);

        if($status){
            echo "<script>alert('Complaint registered successfully');</script>";
        }
        else{
            echo "<script>alert('invalid data');</script>";
        }
        
    }
?>