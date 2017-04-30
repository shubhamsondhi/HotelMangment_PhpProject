<?php
$username='root';
$pass='root';
$server='localhost';
$db='hotel_management';
$conn=mysqli_connect($server,$username,$pass,$db);
if(!$conn)
{
die("connection error");
}
?>