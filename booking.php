<?php
session_start();
include "check.php";
include "head.php";
include "dbconfig.php";
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
if(isset($_POST["submit"])){
        extract($_POST);
echo "ss";
        $sql="SELECT * FROM `room` where room_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
    $price=$row[2];
   $sqli="INSERT INTO `booking` (`Check-in_date`, `Check-out_date`, `u_id`, `r_id`, `facilty1`, `facility2`) VALUES ('$check_in', '$check_out', '1', '$id', 'no', 'no')";
if(mysqli_query($conn,$sqli)){
      echo"hello";
    }
        
    }
}
?><section id="portfolio" class="bg-light-gray">
    <div class="container">
    <form method="post">    
     <table class="table">
        <tr>
         <td>Check In</td>
        <td><input class="form-control" type="date"  name="check_in" required></td>
        </tr>
         <tr>
        <td>check_out</td>
             <td><input class="form-control" type="date" name="check_out"></td>
        </tr>
          <tr>
         <td>adults</td>
        <td><select name='adult'>
            <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
            </select>
        </tr>
      <tr>
         <td><input class="form-control" type="submit" value="submit" name="submit"></td>
        </tr>
        </table>
</form>
    
    </body>
    </html>