<?php

$servername="localhost";
$uname="root";
$pass="rakshit#";
$db="donation";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM announce";
                $query = $conn->query($sql);

                echo "<h1>".$query->num_rows."</h1>";
?>