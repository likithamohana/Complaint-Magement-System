<?php
    session_start();
    if(!$_SESSION['user_login']){
        echo "<script>window.location.href='user_login.php';</script>";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <!-- meta data -->
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .html{
            scroll-behavior:smooth;
        }
        .home{
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            min-height: 100vh;
            align-items: center;
            background: url(https://www.hdwallpapers.in/thumbs/2021/white_paper_flowers_in_white_background_hd_white_background-t2.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            
        
        }
        .home .content{
            flex:1 1 40rem;
        }
        .home .image{
            flex:1 1 40rem;
        }
        .home .image img{
            width: 100%;
            padding: 1rem;
            animation: float 3s linear infinite;
        }
        @keyframes float{
            0%, 100%{
                transform: translateY(0rem);
            }
            50%{
                transform: translateY(3rem);
            }
        }
        .home .content h3{
            font-size: 5rem;
            color: #333;
        }
        .home .content p{
            font-size: 1.7rem;
            color: #666;
            padding: 1rem 0;
        }

        .slideshow-container {
            position: relative;
            max-width: 800px; /* Set your preferred width */
            margin: 0 auto; /* Center the slideshow on the page */
        }
        .mySlides {
            display: none; /* Hide all images by default */
        }

        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins sans-serif';
            box-sizing: border-box;
        }
        .hero{
            width: 100%;
            height: 150px
            ; 
            background: #f6eaff;
            color: #f6eaff;
        }
        header {
            text-align: center;
            padding: 60px;
            position: relative; /* Add position relative to the header */
        }
        nav {
            background: #1a1a1a;
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
        .sub-menu-link button{
            width: 100%;
            border: none;
            background-color: transparent;
            text-align: left;
        }
        .logo {
            position: absolute; /* Position the logo absolutely within the header */
            top: 10px; /* Adjust top position as needed */
            left: 10px; /* Adjust left position as needed */
            width: 180px; /* Adjust the width as needed */
        }
        .row p{
            color:#fff;
        }
        .speciality .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;

}
.sub2{
                    display: none;
                }
.speciality .box-container .box{
    flex: 1 1 30rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 .5rem 1 rem rgba(0,0,0,.1);
    border: .1rem solid rgba(0,0,0,.3);
    cursor: pointer;
    border-radius: .5rem;
}

.speciality .box-container .box .image{
    height: 100%;
    width: 100%;
    object-fit: cover;
    position: absolute;
    top: -100%; left: 0;
}

.speciality .box-container .box .content{
    text-align: center;
    background: #fff;
    padding: 2rem;
}

.speciality .box-container .box .content img{
    margin: 1.5rem 0;
}

.speciality .box-container .box .content h3{
    font-size: 2.5rem;
    color: #333;
}

.speciality .box-container .box .content p{
    font-size: 1.6rem;
    color: #666;
    padding: 1rem 0;
}

.speciality .box-container .box:hover .image{
    top:0;
}

.speciality .box-container .box:hover .content{
    transform: translateY(100%);
}

    </style>
    <form name="dropdown" id="dropdown" method="post">
    <div class="hero">
        <nav>
            <img src="loggo-removebg-preview.png" class="loggo" style="height:150px; width:150px;">
            <ul>
                <li><a href="homePage.php">Home</a></li>
                <li><a href="#speciality">Features</a></li>
                <li><a href="aboutus.html">About</a></li>
            </ul>
            <img src="images 3/profile.png" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                <div class="user-info">
                    <img src="images 3/profile.png">
                    <?php
                        $temp = $_SESSION['username'];
                        echo "<h2 >".$temp."</h2>";
                    ?>
                </div>
                    <hr>
                    <a href="#" class="sub-menu-link" style="display: inline;">
                        
                        <img src="images 3/profile.png">
                        
                            <a href="viewprofile.php" style="color:black; text-decoration: none;">View Profile</a>
                        

                        
                    </a>
                    <br>
                    <a href="#" class="sub-menu-link" >
                        <img src="images 3/setting.png">
                        <button type="button" onclick="window.location.href='user_complaints.php'">Your Complaints</button>
                       
                        
                        
                        
                    </a>
                    
                    <a href="#" class="sub-menu-link" style="display: inline;">
                        
                        
                    <a href="#" class="sub-menu-link">
                        <img src="images 3/logout.png">
                        <button id="logout" name="logout" type="submit">Logout</button>
                        <span>><span>
                        
                    </a>
                </div>
            </div>
        </nav>
    </div>
    </form>
</head>
<body>
    <section class="home" id="home">
        <div class="content">
            <h3>Complaint</h3>
            <p>
                Your most unhappy customers are your greatest source of learning
                Quality is remembered long after price is forgotten.
            </p>
            <a style="margin-left: 250px; margin-top: 20px;" href="#" class="btn" ><p id="para" style="color: #fff; height: 10px;">complain now</p></a>
            <fieldset style=" align-items:center; width: 100px;">
            <div class="sub2" id="sub2" style="padding-left: 320px;">
                <a href="bus_complaint_form.php" class="sub-menu-link"><font size="5">Roadway</font></a>
                <a href="train_complaint_form.php" class="sub-menu-link"><font size="5">Railway</font></a>
                
            </div>
            <script>  
                document.getElementById("para").onclick = function() {  
                fun()  
                };  
                function fun() {  
                document.getElementById("sub2").style.display="block" ;  
                 
                }  
                </script>
               
        </fieldset>
        </div>
        <div class="image">
            <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t39.30808-6/326534007_3473649312956868_5740776740882041930_n.jpg?stp=dst-jpg_s960x960&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Bvf6we_L4M0AX9k6BHT&_nc_ht=scontent.fhyd1-4.fna&oh=00_AfBDLQRL4GutKyY-aNw_1hUj6wMrLJL9DIQpSzixGBgCcg&oe=654885CF" alt="">
        </div>
    </section>
    <section class="speciality" id="speciality">

        <h1 class="heading" style="color:#1a1a1a"> <center><u><strong>Features</strong></u></center></h1>

        <div class="box-container" >

            <div class="box">
                <img class="image"  src="https://cdn-bpplm.nitrocdn.com/MJefRwORvlGzblepEIRIgrqQFCGliGiG/assets/static/optimized/rev-72f94ae/wp-content/uploads/2020/07/Website-Authentication_-The-Complete-Guide-with-FAQs.jpg" alt="">
                <div class="content">
                    <img src="images 3/profile.png" alt="" width="100" height="100">
                    <h3>User Registration and Authentication</h3>
                    <p>
                        Secure authentication methods to protect user data.
                    </p>
                </div>
            </div>
            <div class="box">
                <img class="image"  src="https://files.consumerfinance.gov/f/images/sac_overhead_8_jAL1gGT.original.png" alt="">
                <div class="content">
                    <img src="https://www.shutterstock.com/image-vector/complaint-icon-vector-illustration-design-260nw-1746775700.jpg" alt="" width="100" height="100">
                    <h3>Complaint Submission</h3>
                    <p>
                        Options to attach images or documents to support the complaint.

                    </p>
                </div>
            </div>
            
            <div class="box">
                <img class="image" src="https://proctortrack.com/wp-content/uploads/2022/01/Proctortrack-remote-proctoring-security-maters.png" alt="">
                <div class="content">
                    <img src="https://uxwing.com/wp-content/themes/uxwing/download/crime-security-military-law/privacy-settings-icon.png" alt="" width="100" height="100">
                    <h3>Security and Privacy</h3>
                    <p>
                        Data encryption to protect user information.
                    </p>
                </div>
            </div>
            
    </section>

    

    
    
    

   
    <script>
        let subMenu = document.getElementById("subMenu");
       
        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
        function toggle1(){
            sub2.style.display = "block";
        }
    </script>
    <!-- <footer id="contact"  class="contact"> -->
        <div class="container-fluid text-center text-light bg-secondary">
            <div class="row ">
                <div class="col-4"><!--left-->
                    
                    <a href="#" class="text-light"><h1>Abhiyoga</h1></a>
                    <font size="4" style="padding-top: 80px;">Your Complaint Our Responsibility</font>
                
                </div>
                <div class="col-4"><!--middle-->
                    
                    <h2>
                        
                        <i>
                        
                    <u>CONTACT US: </u></i></h2>
                        </hr>
                        <fieldset>
                    <font size="4">Abhiyogakhlc@transport.com<br></font>
                    <font size="4">912146120<br>
                    7780333129<br>
                    8630023468<br>
                    </font>

                </font>
            </fieldset>
                </div>
                <div class="col-4"><!--right-->
                    
                    <h2>
                        <i>
                    <u> ADDRESS: </u></i></h2>
                    <fieldset>
                    <font size="4">Sri Gayathri Nilayam<br><br>
                        Flat No. :10, Door No.:9-36-19/8 <br><br>
                        Maddilapalem,Visakhapatnam</font>
                    </p>
                </fieldset>
                </div>
            </div>
        </div>  
        
</body>
</html>
<?php
if(isset($_POST['logout'])){
    $_SESSION['login']=false;
    session_destroy();
    echo "<script>window.location.href='user_login.php';</script>";
}
?>
