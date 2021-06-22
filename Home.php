<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class>
        <img src="logo.png" alt="Logo cannot be loaded" style="vertical-align:middle;margin:30px 60px 30px 20px;width=140;height=140">
        <img src="banner.png" alt="Banner cannot be loaded" style="vertical-align:middle;margin:30px 60px 30px 20px ;width=550;height=140">
        <button class="btnA"><span>Online Payment</span></button>
    </div>
    <ul>
        <li><a class="active" href="Home.php">Home</a></li>
        <li><a href="insurance_plans_a.php">Insurance Plans</a></li>
        <li><a href="#feat">Features</a></li>
        <li><a href="#comp">Company</a></li>
        <li><a href="#onlineserv">Online Services</a></li>
        <li><a href="#officeinfo">Office Information</a></li>
        <li><a href="#career">Career</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <div class="grid-containerA">
        <?php while($row=$result->fetch_assoc()): ?>
            <div class="grid-itemA">
                <div class="container">
                    <h2><?php echo $row['title'];?></h2>
                </div>
                <div class="container">
                    <h5><?php echo substr($row['content'],0,200);?></h5>
                </div>
                <button class="btnF">
                <a href="insurance_plans_a.php" button onclick="on()">See more</button></a></li>
                </button>
            </div>
        <?php endwhile ?>
    </div>
</body>
</html>