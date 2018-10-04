<?php

echo $_POST["userid"];
echo "<br>";
echo $_POST["psw"];

$servername = "localhost";
$username = "ivan";
$password = "admin";
$database = "web";

echo $_POST["userid"];
echo "<br>";
echo $_POST["psw"];

$conn = new mysqli($servername, $username, $password,$database);
