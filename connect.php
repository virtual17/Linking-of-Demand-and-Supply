<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);
$db=mysql_select_db("linking",$conn) or die('MYSQL DATABASE ERROR');
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
//else{
//echo "Connected successfully";}
?>