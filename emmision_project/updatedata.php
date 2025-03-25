<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($name != "" && $email != "" && $password != "" ){
            $sql = "UPDATE user set `email`='$email', `password`='$password'
            WHERE `username`='$name'";
            if (mysqli_query($conn, $sql)) {
                header("location: indexA.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Name, email and password cannot be empty!";
        }
    }
?>