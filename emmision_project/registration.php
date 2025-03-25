<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/styles-sign-in.css" />
<script src="https://kit.fontawesome.com/b5f74f45dd.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<div class="form-box">
<h1 id="title">Sign Up</h1>
<form name="registration" action="" method="post">
    <div class="input-field" id="namefield">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="username" placeholder="Corporation's Name" required />
    </div>
    <div class="input-field">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required />
    </div>
    <div class="input-field">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" placeholder="Password" min="8" required />
        <div></div>
    </div>
    <div class="input-field">
        <i class="fa-solid fa-lock">*</i>
        <input type="password" name="repassword" placeholder="Confirm Password" min="8" required />
    </div>
    <div class="btn-field">
        <button id="signinbtn" type="submit" name="submit" value="Register" onclick="validation()">Sign Up</button>
    </div>
</form>
</div>
</div>

<script>
function validation() {
    var password = document.forms["registration"]["password"].value;
    var confirmPassword = document.forms["registration"]["repassword"].value;
    
    var regex = /^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;	// Regular expression
    
    if (password != confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }
    if (password.length < 8 || !regex.test(password)) {
        alert("Password should be at least 8 characters long and contain at least one special character.");
        return false;
    }
}
</script>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    include 'connect.php';

    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
		echo '<script>window.location.href = "login.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

</body>
</html>