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
  $phno = $_POST["phno"];
  $user = $_POST["user"];
  $pass = $_POST["pass"];
}



$sql = "INSERT INTO register (name, email, phno, user, pass)
VALUES ('$name','$email',$phno,'$user','$pass')";

if ($conn->query($sql) === TRUE) {
   header("Location: ../result/Page-3.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>