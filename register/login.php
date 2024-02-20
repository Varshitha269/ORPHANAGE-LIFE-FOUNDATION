<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfff";
$conn = new mysqli($servername,$username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['user']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      


      $sql = "SELECT * FROM register WHERE user = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         // echo"Welcome";
         $_SESSION['user11']=$myusername;
         header("Location: ../projectcfff.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>