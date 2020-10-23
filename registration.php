<?php
$servername = "sql300.epizy.com";
$username = "epiz_27009709";
$password = "bXzpvq2UiNNl";
$dbname = "epiz_27009709_regidata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $password = $_POST['password'];
  
$sql_query = "INSERT INTO registration_details (firstname, lastname, gender, dob, email, phonenumber, city, state, password)
VALUES ('$firstname','$lastname','$gender','$dob','$email','$phonenumber','$city','$state','$password')";

if (mysqli_query($conn, $sql_query))
 {
  echo "Registration successful";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
