<?php
$server = "localhost";
$username = "collegev_anand";
$password = "JHuUFAa2N";
$db = "collegev_db";
$con = new mysqli($server, $username, $password, $db);
mysqli_set_charset($con, "utf8");
//  if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
// }
//  echo "Connected successfully";
?>
