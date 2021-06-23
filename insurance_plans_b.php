<?php include('server.php'); ?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="style.css">
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <div>
        <img src="logo.png" alt="Logo cannot be loaded" style="vertical-align:middle;margin:30px 60px 30px 20px;width=140;height=140">
        <img src="banner.png" alt="Banner cannot be loaded" style="vertical-align:middle;margin:30px 60px 30px 20px ;width=550;height=140">
        <button class="btnA"><span>Online Payment</span></button>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a class="active" href="login.php" button onclick="on()">Insurance Plans</a></li>
        <li><a href="login.php" button onclick="on()">Insurance Details</a></li>
        <li><a href="#comp">Company</a></li>
        <li><a href="#onlineserv">Online Services</a></li>
        <li><a href="#officeinfo">Office Information</a></li>
        <li><a href="#career">Career</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>
    <div class="main">
        <?php if (isset($_SESSION['username'])) :?>
            <p>Welcome <?php echo $_SESSION['username'];?> </p>
        <?php endif ?>   
    </div>
    <form class= "formB" action = "" method = "POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <?php  include('errors.php'); ?>
        <label>Title</label>
        <input type="text" name ="title" value= "<?php echo $title; ?>"placeholder="Enter a suitable title"><br><br>
        <label>Content</label>
        <textarea name="editor" <?php echo $editor; ?> id="editor">
        </textarea><br><br>
        <?php
        if($update == true):
        ?>
        <button class= "btn" type="submit" name="update">Update</button>
        <?php else: ?>
        <button class= "btn" type="submit" name="save">Save</button>
        <?php endif; ?>
    </form>
<script>
CKEDITOR.replace('editor');
</script>
</body>

</html>