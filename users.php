<?php
// Read from the formulary (login.html)
//
$servername = "localhost";
$username = "root";
$password = "";
//$password = "";
$db = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
// select from user where ....
$query = "SELECT user FROM users";
//echo $query;
$result = mysqli_query($conn, $query);
/* numeric array */
while($row = mysqli_fetch_array($result)){
    echo $row[0] . "<br>";
}