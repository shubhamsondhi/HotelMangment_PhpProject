<?php

session_start();
include "check.php";
include 'head.php';
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'dbconfig.php';
    $sql="INSERT INTO `hotel` (`Hotel_name`, `Hotel_location`, `Hotel_Website`) VALUES ('$Hotel_name', '$Hotel_location', '$Hotel_Website')";
    if(mysqli_query($conn,$sql))
    {
        echo "inserted";
    }
    }
?>
    
   <section id="portfolio" class="bg-light-gray">
    <div class="container">
    <form method="post">
        <center>
    <table class="table" border="5" width="300">
    <tr>
        <td>Hotel_name</td>
        <td><input type="text" id="text" name="Hotel_name" placeholder="enter the hotel name"></td>
        </tr>
        <tr>
        <td>Hotel_location</td>
<td><input type="text" id="text" name="Hotel_location" placeholder="enter the location of hotel"></td>
        </tr>
    <tr>
        <td>Hotel_Website</td>
        <td><input type="text" id="text" name="Hotel_Website" placeholder="enter the website of hotel"></td>
        </tr>
        <tr>
        <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
        </table>
        </center></form></div></section>
 </body>
</html>
        