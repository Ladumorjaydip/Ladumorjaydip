<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/styles-sign-in.css" />
<script src="https://kit.fontawesome.com/b5f74f45dd.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<div class="form-box">
<h1 id="title">Log In</h1>
<form action="" method="post" name="login" onsubmit="return validateForm()">
    <div class="input-field" id="namefield">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="username" placeholder="Corporation's Name" required />
    </div>
    <div class="input-field">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required />
    </div>
    <br>
    <div class="btn-field">
        <button name="submit" type="submit" value="Login" id="signinbtn">Sign in</button>
    </div>
</form>
<p>Not registered yet? <a href='registration.php' target="_blank">Register Here</a></p>
</div>
</div>

<script>
function validateForm() {
    var username = document.forms["login"]["username"].value;
    var password = document.forms["login"]["password"].value;
    var regex = /^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;	// Regular expression

    if (username == "" || password == "") {
        alert("Please enter both username and password");
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
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<script>window.location.href = "calc.php";</script>';
        exit; 
    } else {
        echo '<script>alert("Invalid username or password");</script>';
    }

    $conn->close();
}
?>

</body>
</html>
