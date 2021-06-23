<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div>
        <img src="logo.png" alt="Logo cannot be loaded" style="vertical-align:middle;margin:30px 60px 30px 20px;width=140;height=140">
        <img src="banner.png" alt="Banner cannot be loaded" style="vertical-align:middle;margin:30px 60px 30px 20px ;width=550;height=140">
        <button class="btnA"><span>Online Payment</span></button>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registration.php" button onclick="on()">Registration</button></a></li>
        <li><a class="active" href="login.php">Login</a></li>
        <li><a href="login.php" button onclick="on()">Insurance Plans</a></li>
        <li><a href="login.php" button onclick="on()">Insurance Details</a></li>
        <li><a href="#comp">Company</a></li>
        <li><a href="#onlineserv">Online Services</a></li>
        <li><a href="#officeinfo">Office Information</a></li>
        <li><a href="#career">Career</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>
    <div id="myOverlay" class="overlay">
        <span class="btnClose" onclick="closeForm()" title="Close Overlay">&#215</span>
        <div class="wrap">
            <h3>Login</h3>
            <form method="post" action="login.php">
                <?php  include('errors.php'); ?>
                <input type="text" name="username" placeholder="Enter User Name">
                <input type="password" name="password" placeholder="Enter password">
                <button class="btnC" type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="registration.php">Register</a></p>
            </form>
        </div>
    </div>
<script>
function openForm(){
    document.getElementById("myOverlay").style.display="block";
}  
function closeForm(){
    document.getElementById("myOverlay").style.display="none";
}  
</script>
</body>
</html>