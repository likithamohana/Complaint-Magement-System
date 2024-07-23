<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewpoint" content="width=device-width", initial-scale="1.0">
        <title>PROFILE</title>
        <link rel="stylesheet" herf="style.css">
        <style>
            nav {
            
            width: 100%;
            padding: 10px 10%;
            display: flex;
            align-items: center;
            justify-content: space between;
            position: relative;
        }
        .loggo{
            width: 120px;
        }
        .user-pic{
            width: 40px;
            border-radius: 50%;
            cursor: pointer;
            margin-left: 30px;
        }
        nav ul{
            width: 100%;
            text-align: right;
        }
        nav ul li{
            display: inline-block;
            list-style: none;
            margin: 10px 20px;
        }
        nav ul li a{
            color: #f6eaff;
            text-decoration: none;
        }
             .sub-menu-wrap{
            position: absolute;
            top: 100%;
            right: 10%;
            width: 320px;
            max-height: 0px;
            overflow:hidden;
            transition:max-height 0.5s;
            z-index:100;
        }
        .sub-menu-wrap.open-menu{
            max-height: 400px;
        }
        .sub-menu{
            background: #fff;
            padding: 20px;
            margin: 10px;
        }
        .user-info{
            display: flex;
            align-items: center;
        }
        .user-info h3{
            font-weight: 500;
        }
        .user-info img{
            width: 60px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .sub-menu hr{
            border: 0;
            height: 1px;
            width: 100%;
            background: #ccc;
            margin: 15px 0 10px;
        }
        .sub-menu-link{
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #525252;
            margin: 12px 0;
        }
        .btn{
            background-color: #4c86af; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .sub-menu-link p{
            width: 100%;
        }
        .sub-menu-link button{
            width: 100%;
            border: none;
            background-color: transparent;
            text-align: left;
        }
        .sub-menu-link img{
            width: 40px;
            background: #e5e5e5;
            border-radius: 50%;
            padding: 8px;
            margin-right: 15px;
        }
        .sub-menu-link span{
            font-size: 22px;
            transition: transform 0.5;
        }
        .sub-menu-link:hover span{
            transform:translateX(5px);
        }
        .sub-menu-link:hover p{
            font-weight: 600;
        }
            .container{background-image: url(background.jpg);
             background-size: cover;
             width: 100%;
            height: 100vh;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
            .profile-box{
                background: #c59535;
                text-align: center;
                padding: 40px 90px;
                color: #c59535;
                position: relative;
                border-radius: 20px;

            }
            .menu-icon{
                width: 25px;
                position: absolute;
                left:40px;
                top: 40px;

            }
            .setting-icon{
                width: 25px;
                position: absolute;
                right:40px;
                top: 40px;

            }
            #f{
                color: black;
            }
            .profile-pic{
                width: 150px;
                border-radius: 50%;
                background: #c59535;
                padding: 6px;
                margin-top: 40px;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="profile-box">
    
            <nav>
                <img src="menu.png" class="menu-icon" id="menu-icon1" style="padding-left=5px;"onclick="toggleMenu()">
               
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                <div class="user-info">
                    
                    <?php
                        $temp = $_SESSION['username'];
                        echo "<h2>".$temp."</h2>";
                       ?>
                </div>
                <div>
                <?php
            $mail=$_SESSION['mail'];
            echo "<h2>".$mail."</h2>";
            ?>
            </div>
            <div>
                <?php
            $phno=$_SESSION['phno'];
            echo "<h2>".$phno."</h2>";
            ?>
            </div>
            <div>
                <?php
            $dis=$_SESSION['district'];
            echo "<h2>".$dis."</h2>";
            ?>
            </div>
            <div>
                <?php
            $address=$_SESSION['address'];
            echo "<h2>".$address."</h2>";
            ?>
            </div>
            <div>
                <?php
            $pc=$_SESSION['pincode'];
            echo "<h2>".$pc."</h2>";
            ?>
            </div>
            <div>
                <?php
            $cn=$_SESSION['country'];
            echo "<h2>".$cn."</h2>";
                    ?>
                </div>
                </div>
            </div>
        </nav>
                <script>
                    let subMenu = document.getElementById("subMenu");
                   
                    function toggleMenu(){
                        subMenu.classList.toggle("open-menu");
                    }
                    
                </script>
                
                
                
                <img  src="images 3/profile.png" class="profile-pic">
                <h3 id="f">Welcome!!</h3>
                

                </div>
        </div>

</body>
</html>

                