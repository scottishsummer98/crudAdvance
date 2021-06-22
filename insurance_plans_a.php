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
        <li><a href="Home.php">Home</a></li>
        <li><a class="active" href="insurance_plans_a.php">Insurance Plans</a></li>
        <li><a href="#feat">Features</a></li>
        <li><a href="#comp">Company</a></li>
        <li><a href="#onlineserv">Online Services</a></li>
        <li><a href="#officeinfo">Office Information</a></li>
        <li><a href="#career">Career</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <div class="grid-container">
        <div class="grid-item">
            <form action = "" method = "POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <?php  include('errors.php'); ?>
                <label>Title</label><br>
                <input type="text" name ="title" value= "<?php echo $title; ?>"placeholder="Enter a suitable title"><br>
                <label>Content</label>
                <textarea name="editor" <?php echo $editor; ?> id="editor">
                </textarea><br>
                <?php
                if($update == true):
                ?>
                <button class= "btnC" type="submit" name="update">Update</button>
                <?php else: ?>
                <button class= "btnC" type="submit" name="save">Save</button>
                <?php endif; ?>
            </form>
        </div>
        <div class="grid-item">
            <table>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
                <?php while($row=$result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo substr($row['content'],10,30);?></td>
                    <td>
                        <a href="insurance_plans_a.php?edit=<?php echo $row['id']; ?>"
                        class=btnD>Edit</a>
                        <a href="server.php?delete=<?php echo $row['id']; ?>"
                        class=btnE>Delete</a>
                    </td>
                </tr>
                <?php endwhile ?>
            </table>
        </div>
    </div>
<script>
CKEDITOR.replace('editor');
</script>
</body>

</html>