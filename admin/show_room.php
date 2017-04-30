<?php
session_start();
include "check.php";
include "head.php";
include "dbconfig.php";
    
?>
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        
        
<!--
        
<table class="table" border="5" width="300">
    <tr><td>Image</td><td>Room No</td><td>Price</td><td>Floor</td><td>booking</td></tr>
-->
<?php 
$sql="SELECT * FROM `booking`";
$result=mysqli_query($conn,$sql);
while($row1=mysqli_fetch_row($result)){
    $r_id=$row1[3];
    $sql1="SELECT * FROM `room` where Room_id=$r_id";
    $result=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_row($result)
    
?>
    
     <div class="col-md-4 col-sm-6 portfolio-item">
                   
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../<?php echo $row[4]?>" class="img-responsive" alt="">
                   
                    <div class="portfolio-caption">
                        <h4>Booking</h4>
                        <p class="text-muted">Price:- <?php echo $row[3]?></p>
                        <p class="text-muted">Floor:- <?php echo $row[2]?>
                            <p class="text-muted">Check In:- <?php echo $row1[0]?>
                                <p class="text-muted">Check Out:- <?php echo $row1[1]?>
                        </p>
                        
                    </div>
                </div>
                  
        
        



<?php    
    
                                     } ?></table></section></body></html>
