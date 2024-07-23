<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://wallpaperaccess.com/full/5205235.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 450px;
        }

        h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007BFF;
        }

        /* Style radio buttons */
        .radio-label {
            display: inline-block;
            margin-right: 20px;
            font-weight: normal;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"],
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

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <label for="uname">Username</label>
            <input type="text" id="uname" name="uname"  required><br><br>
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="pwd"  required><br><br>
            
            <button type="submit" id="login" name="login">Login</button>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $username=$_POST['uname'];
        $password=$_POST['pwd'];

        $host="localhost";
        $dbuser="root";
        $pwd="";
        $dbname="cms";

        $conn=new mysqli($host,$dbuser,$pwd,$dbname);
        
        $st="select * from user_login where username='$username' and password='$password';";
        $x=$conn->query($st);
        if($x->num_rows>0){
            echo "<script>alert('login successful');</script>";
            $_SESSION['user_login']=true;
            $row = $x->fetch_assoc();
            $_SESSION['username']=$username;
            $_SESSION['mail']=$row['mail_id'];
            $_SESSION['phno']=$row["phone_number"];
            $_SESSION['district']=$row['district'];
            $_SESSION['address']=$row['address'];
            $_SESSION['pincode']=$row['pincode'];
            $_SESSION['country']=$row['country'];
            echo "<script>window.location.href='homePage.php';</script>";
        }
        else
        {
            echo "<script>alert('invalid login credentials');</script>";
        }
        mysqli_close($conn);
    }
?>
