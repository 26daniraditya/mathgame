<?php
$servername = "localhost:3306";
$username = "mdrcorpo_uts";
$password = "mdrcorpo_uts";
$dbname = "mdrcorpo_uts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>