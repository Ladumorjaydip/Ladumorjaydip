<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($name != "" && $email != "" && $password != "" ){
            $sql = "INSERT INTO user (`username`, `email`, `password`) VALUES ('$name', '$email', $password)";
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