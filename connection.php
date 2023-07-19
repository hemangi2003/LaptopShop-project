<?php

$servername = "localhost";
$username ="hmg";
$password = "7090";
$dbname = "laptopshop";

$con = mysqli_connect($servername,$username,$password,$dbname);

//check the connection

if($con)
{
          echo "Connection OK";  
}
else
{
    echo "Connection Failed".mysqli_connect_error();
}

error_reporting(E_ALL);

//signup

if(isset($_POST['register'])){
    $firstname =  $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['pwd']);
   

    $query1 = "INSERT INTO signup(firstname,lastname,email,pwd) VALUES('$firstname','$lastname','$email','$password')";
    $data1 =  mysqli_query($con,$query1);
    if($data1)
        {
            header('Location:login.php');
        }
        else    
        {
            echo "Error : Try again later";
            header('Location:registration.php');
        }
} 

//Signin

if(isset($_POST['signin'])){

    $spwd = $_POST['spwd'];
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query2 = "SELECT * FROM signup WHERE email = '".$_POST['semail']."'";
    $data2 = mysqli_query($con,$query2);
    
    while($row = mysqli_fetch_array($data2,MYSQLI_ASSOC))
    {
        $dbpwd = $row['pwd'];
    }
        if(md5($spwd)==$dbpwd){
            echo "Password match";
            header('Location:homepage.php');
        }
        else
        {
        echo "No match";
        header('Location:login.php');
        }
    }

//Admin Signin

if(isset($_POST['asignin'])){
    $email = $_POST['aemail'];
    $apwd = $_POST['apwd'];

    $query3 = "SELECT * FROM admin_signin WHERE email = '".$_POST['aemail']."'";
    $data3 = mysqli_query($con,$query3);
    while($row = mysqli_fetch_array($data3,MYSQLI_ASSOC)){

        $dbpwd = $row['pwd'];
    }
        if(($apwd)==$dbpwd)
        {
        echo "Password match";
        header('Location:homepage.php');
        }
        else
        {
        echo "No match";
        header('Location:loginA.php');
        }
    }

//add product

if (isset($_POST['addproduct'])) {

    $pname = $_POST['pname'];
    $Category = $_POST['category'];
    $desc = $_POST['pdes'];
    $price = $_POST['price'];

    $location = "upload/";
    $file1 = $_FILES['img1']['name'];
    $file_tmp1 = $_FILES['img1']['tmp_name'];

    $query4 = "INSERT into add_product(pname,catagory,pdesc,price,IMAGES) values('" . $pname . "','" . $Category . "','" . $desc . "'," . $price . ",'" . $file1 . "')";
    if (mysqli_query($con, $query4)) {
        header('Location:productsm.php');
        echo "success";
        move_uploaded_file($file_tmp1, $location . $file1);
    } else {
        echo "eror";
    }
}

if (isset($_POST['edit'])) {
    $pid = $_POST['id'];
    $pname = $_POST['pname'];
    $Category = $_POST['category'];
    $desc = $_POST['pdes'];
    $price = $_POST['price'];
    if (isset($_FILES)) {
        $location = "upload/";
        $file = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];

        $query = "UPDATE add_product SET pname = '" . $pname . "',catagory = '" . $Category . "',pdesc = '" . $desc . "',price = " . $price . ",IMAGES='" . $file . "' WHERE id=" . $pid;
        if (mysqli_query($con, $query)) {
            $imgname = "img" . mysqli_insert_id($con) . "." . $imgType;
            move_uploaded_file($file_tmp, $location . $file);
            header('Location: productsm.php');
            die();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    } else {
        $query = "UPDATE add_product SET pname = '" . $pname . "',catagory = '" . $Category . "',pdesc = '" . $desc . "',price = " . $price . ",IMAGES='" . $file. "' WHERE id=" . $pid;
        if (mysqli_query($con, $query)) {
            header('Location: productsm.php');
            die();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
}

if (isset($_GET["delete"])) {
    $query = "DELETE FROM add_product WHERE id=" . $_GET['id'];
    if (mysqli_query($con, $query)) {
        header('Location: productsm.php');
        die();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}

?>