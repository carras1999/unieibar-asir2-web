<?php

$user = $_POST["userid"];
$passw = $_POST["psw"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "web";

/*echo $_POST["userid"];
echo "<br>";
echo $_POST["psw"];
echo "<br>";
*/
$conn = mysqli_connect($servername, $username, $password,$database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
echo "<br>";

$query = "SELECT * FROM users WHERE user='$user' AND password='$passw'";
//echo $query;

$result = mysqli_query($conn, $query);
//var_dump($result);

$row  = mysqli_fetch_array($result);
//echo $row[0];
//var_dump($row[0]);

if ($row) {
    echo "Login OK";
} else {
    //echo "Login KO";
    header('Location: '."login.html");
}

?>