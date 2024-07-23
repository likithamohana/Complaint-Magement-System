<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management System - Registration</title>
    <style>
        /* Reset some default styles */
        body, h1, p {
            margin: 0;
            padding: 0;
        }

        /* Apply styles to the body */
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://echo-tech.com/EchoBusV3.0/SystemAssets/Complaint%20MS/89de60f4-26c2-41bf-8a75-703d77665a35_wael-01.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; /* Reset margin to center the container */
        }

        /* Style the container */
        .container {
            max-width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent background color to make content more readable */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        /* Style the heading */
        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }

        /* Style form elements */
        label {
            display: block;
            margin-bottom: 5px; /* Adjusted margin for better alignment */
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] ,
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px; /* Adjusted margin for better alignment */
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
            box-sizing: border-box; /* Include padding and border in the width */
        }

        /* Style the button */
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Style the paragraph with the login link */
        p {
            text-align: center;
            margin-top: 10px;
        }

        /* Style the login link */
        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register for Transport Complaint</h1>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="phno">Phone Number:</label>
            <input type="tel" id="phno" name="phno"><br><br>

            <label for="country">Country:</label>
            <input type="text" id="cn" name="cn"><br><br>

            <label for="dis">District:</label>
            <input type="text" id="dis" name="dis"><br><br>

            <label for="pn">Pincode:</label>
            <input type="text" id="pn" name="pn"><br><br>

            <label for="an">Address:</label>
            <input type="text" id="an" name="an"><br><br>

        
            <button type="submit" id="register" name="register">Register</button>
        </form>
        <p>Already have an account? <a href="user_login.php">Login</a></p>
    </div>
</body>
</html>

<?php
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $mail=$_POST['email'];
        $pwd=$_POST['password'];
        $cnf=$_POST['confirm_password'];
        $phno=$_POST['phno'];
        $country=$_POST['cn'];
        $district=$_POST['dis'];
        $address=$_POST['an'];
        $pincode=$_POST['pn'];

        $host="localhost";
        $dbuser="root";
        $password="";
        $dbname="cms";

        $conn=mysqli_connect($host,$dbuser,$password,$dbname);
        $query1="select * from user_login where username='$username';";
        $exec1=mysqli_query($conn,$query1);
        $query2="select * from user_login where mail_id='$mail';";
        $exec2=mysqli_query($conn,$query2);
        $query3="select * from user_login where phone_number='$phno'";
        $exec3=mysqli_query($conn,$query3);
        
        if($pwd!=$cnf){
            echo "<script>alert('confirm password is wrong');</script>";
        }
        
        else if(mysqli_num_rows($exec1)>0){
            echo    '<script type="text/javascript">
                            alert("username already taken please choose other");
                        </script>';
        }

        
        else if(mysqli_num_rows($exec2)>0){
            echo    '<script type="text/javascript">
                            alert("mail id already taken please choose other"); 
                        </script>';
        }

        

        else if(mysqli_num_rows($exec3)>0){
            echo    '<script type="text/javascript">
                            alert("phone number already taken please choose other"); 
                        </script>';
        }

        else{
            $query="insert into user_login values ('$username','$mail','$pwd','$phno','$country','$district','$address','$pincode');";
            $exec=mysqli_query($conn,$query);
            if($exec){
                echo    '<script type="text/javascript">
                            alert("Registration successful"); 
                        </script>';
                echo "<script>window.location.href='user_login.php'</script>";
            }
            else{
                echo    '<script type="text/javascript">
                            alert("check all fields again"); 
                        </script>';
            }
        }
        mysqli_close($conn);
    }
?>