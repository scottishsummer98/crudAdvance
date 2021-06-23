<?php

session_start();

$title = $editor = $slug = $username = $email = $phonenumber = "";
$pid=0;
$update = false;
$errors = array();

//CONNECTING TO DATABASE
$myDb = mysqli_connect('localhost', 'samir', 'samir1234', 'pro2') or die("Connection to database failed");

//REGISTER
if(isset($_POST['register']))
{
    $username = mysqli_real_escape_string($myDb, $_POST['username']);
    $email = mysqli_real_escape_string($myDb, $_POST['email']);
    $password_1 = mysqli_real_escape_string($myDb, $_POST['password1']);
    $password_2 = mysqli_real_escape_string($myDb, $_POST['password2']);
    $phonenumber = mysqli_real_escape_string($myDb, $_POST['phonenumber']);
    
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if(empty($password_1)){
        array_push($errors,"Password is required");
    }
    if($password_1!=$password_2){
        array_push($errors,"Passwords did not match");
    }
    if(empty($phonenumber)){
        array_push($errors,"Phone Number is required");
    }

    $user_check_query = "SELECT * FROM customers WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($myDb, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) {

        if ($user['username'] == $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] == $email) {
            array_push($errors, "You already have an account");
        }
    }
    
    if(count($errors) == 0){
        $password_enc = md5($password_1);

        $sql = "INSERT INTO `customers`(`username`, `email`, `password`, `phonenumber`)
        VALUES ('$username','$email','$password_enc','$phonenumber')";
        
        mysqli_query($myDb, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'];
        header('location:Home.php');
    }
}

//LOGIN
if(isset($_POST['login'])) {
    
    $username = mysqli_real_escape_string($myDb, $_POST['username']);
    $password = mysqli_real_escape_string($myDb, $_POST['password']);

    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0){
        $password_enc = md5($password);
        $query = "SELECT * FROM `customers` WHERE `username`='$username' AND `password`= '$password_enc'";
        $result = mysqli_query($myDb,$query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'];
            header('location:Home.php');
        }else{
            array_push($errors, "Wrong username/password entered");
            
        }
    }    
}

//SAVE DATA
if(isset($_POST['save'])) {
    $title = mysqli_real_escape_string($myDb, $_POST['title']);
    $editor = $_POST['editor'];
    $slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($_POST['title'])));

    if(empty($title)){
        array_push($errors, "Title is required");
    }
    if(empty($editor)){
        array_push($errors, "Content is required");
    }
    if(count($errors) == 0){
        $sql = "INSERT INTO `post`(`title`, `content`, `slug`)
                VALUES ('$title','$editor','$slug')";
        
        mysqli_query($myDb, $sql);
        $_SESSION['message'] = "Record has been saved";
        $_SESSION['msg_type']="success";
        header('location:insurance_plans_a.php');
    }    
}

//VIEW DATA
$view_query = "SELECT * FROM post";
    $result= mysqli_query($myDb, $view_query);
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '<pre>';
    }

//DELETE DATA
if(isset($_GET['delete'])){
    $id= $_GET['delete'];
    $del_query = "DELETE FROM `post` WHERE pid=$id";
    mysqli_query($myDb,$del_query);
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type']="danger";
    header('location:insurance_plans_a.php');
}

//EDIT DATA
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update = true;
    $edit_query="SELECT * FROM post WHERE pid=$id";
    $result= mysqli_query($myDb,$edit_query);
    if(count(array($result))==1){
        $row=$result->fetch_array();
        $title=$row['title'];
        $editor=$row['content'];
    }
}

//UPDATE EDITED DATA
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $editor = $_POST['editor'];
    $slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($_POST['title'])));
    $update_query = "UPDATE `post` SET `title`='$title', `content`='$editor', `slug`='$slug' WHERE pid='$id'";
    mysqli_query($myDb,$update_query);
    header('location:insurance_plans_a.php');
}

global $row;

//view details in another page
if(isset($_GET['insurance_post_id'])){
    $id= mysqli_real_escape_string($myDb, $_GET['insurance_post_id']);
    $vd_query = "SELECT * FROM `post` WHERE pid=$id";
    $result = mysqli_query($myDb,$vd_query);
    global $row;
    $row = mysqli_fetch_array($result);
}

?>