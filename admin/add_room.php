<?php 

session_start();
include "check.php";
include 'head.php';
include 'dbconfig.php';
if(isset($_POST['submit']))
{
 extract($_POST);
    $name1=$_FILES['Room_image']['name'];
    $address1="image/".$name1;
    $temp=$_FILES['Room_image']['tmp_name'];
     $sql="INSERT INTO `room` (`Room_id`, `Room_type`, `Room_name`, `Room_price`, `Room_image`, `Room_description`) VALUES (NULL, '$Room_type', '$Room_name', '$Room_price', '$address1', '$Room_description')";
    if(mysqli_query($conn,$sql))
    {
        echo "inserted";
        move_uploaded_file($temp,"../".$address1);
    }
}
?>

<section id="portfolio" class="bg-light-gray">
        <div class="container">
    <form method="POST" enctype="multipart/form-data">
    <center><table class="table" bgcolor="pink" border="5" width="400">
           
    <tr>
        <td>Room_type</td>
<td><input class="form-control" type="text" placeholder="Enter the type of room" id="text" name="Room_type"></td>
        </tr>
    <tr>
    <td>Room Floor</td>
    <td><input type="number" id="text" placeholder="enter the name of room" name="Room Floor"></td>
    </tr>
    <tr>
    <td>Room_price</td>
    <td><input type="text" id="text" name="Room_price" placeholder="enter the price of room"></td>
    </tr>
    <tr>
    <td>Room_image</td>
        <td><input type="file" id="file" name="Room_image"></td>
    </tr>
    <tr>
    <td>Room_description</td>
        <td><input type="text" id="text" name="Room_description" placeholder="enter the description of room"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="submit"></td>
        </tr>
        </table>
        
        <?php
        {
    $sql="SELECT * FROM `room` ";
        }
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_row($result))
            
        {
            echo "<img src='$row[4]>'";
            
            
        } ?>
        </center></form></div></section>
    </body>
</html>