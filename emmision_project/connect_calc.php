<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "carbon"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
$c_name = $_POST['c_name'];
$year = $_POST['year'];
$hour = $_POST['hour'];
$kilograms = $_POST['kilograms'];
$kilometres = $_POST['kilometres'];

$sql = "INSERT INTO calc (c_name, year, hour, kilograms, kilometres) VALUES ('$c_name', '$year', '$hour', '$kilograms', '$kilometres')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
