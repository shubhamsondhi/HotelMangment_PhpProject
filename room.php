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
$sql="SELECT * FROM `room`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
?>
    
     <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="booking.php?id=<?php echo $row[0]?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $row[4]?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <a href="booking.php?id=<?php echo $row[0]?>" > <h4>Booking</h4></a>
                        <p class="text-muted">Price:- <?php echo $row[3]?></p>
                        <p class="text-muted">Floor:- <?php echo $row[2]?>
                        </p>
                        
                    </div>
                </div>
                  
        
        



<?php    
    
                                     } ?></table></section></body></html>
