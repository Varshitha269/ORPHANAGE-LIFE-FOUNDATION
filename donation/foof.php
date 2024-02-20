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
  $location = $_POST["location"];
  $email = $_POST["email"];
  $contactno = $_POST["contactno"];
  $foodcount = $_POST["foodcount"];
  $donatedate = date('m-d-Y');
  // $orphanage = $_POST["orphanage"];

}

$sql = "INSERT INTO food (name, location, email, contactno, foodcount ,donatedate )
VALUES ('$name','$location','$email',$contactno,'$foodcount',$donatedate)";

if ($conn->query($sql) === TRUE) {
   header("Location: ../result/Page5/page5.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>