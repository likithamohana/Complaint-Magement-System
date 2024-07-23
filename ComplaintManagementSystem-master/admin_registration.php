
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management System - Registration</title>
    <style>
        body, h1, p {
            margin: 0;
            padding: 0;
        }

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
            margin: 0;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px; 
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px; 
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
            box-sizing: border-box; 
        }

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

        p {
            text-align: center;
            margin-top: 10px;
        }

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
            <!-- Radio buttons for Owner and Customer -->
            <label class="radio-label"><input type="radio" name="userType" id="userType" value="Railways"> Railways</label>
            <label class="radio-label"><input type="radio" name="userType" id="userType" value="Roadways"> Roadway</label>

            <button type="submit" id="register" name="register">Register</button>
        </form>
        <p>Already have an account? <a href="admin_login.php">Login</a></p>
    </div>
</body>
</html>


<?php
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $mail=$_POST['email'];
        $pwd=$_POST['password'];
        $cnf=$_POST['confirm_password'];
        $type=$_POST['userType'];
        
        $host="localhost";
        $dbuser="root";
        $password="";
        $dbname="cms";

        $conn=mysqli_connect($host,$dbuser,$password,$dbname);
        $query1="select * from admin_login where username='$username';";
        $exec1=mysqli_query($conn,$query1);
        $query2="select * from admin_login where mail_id='$mail';";
        $exec2=mysqli_query($conn,$query2);
        
        
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

        else{
            $query="insert into admin_login values ('$username','$mail','$pwd','$type');";
            $exec=mysqli_query($conn,$query);
            if($exec){
                echo    '<script type="text/javascript">
                            alert("Registration successful"); 
                        </script>';
                echo "<script>window.location.href='admin_login.php'</script>";
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