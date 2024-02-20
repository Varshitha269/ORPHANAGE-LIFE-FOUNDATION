<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfff";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_SERVER['REQUEST_METHOD']=="POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phoneno = $_POST["phoneno"];
  $address = $_POST["address"];
  $message = $_POST["message"];
}

$sql = "INSERT INTO contact (name, email, phoneno, address, message)
VALUES ('$name','$email',$phoneno,'$address','$message')";

if ($conn->query($sql) === TRUE) {
  header("Location: ../result/Page4/page4.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>