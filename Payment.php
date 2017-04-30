<?php
session_start();
include "check.php";
include 'head.php';
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'dbconfig.php';
    $sql="INSERT INTO `payment` (`Pay_id`, `Customer_id`, `Booking_id`, `First_name`, `Last_name`, `Credit_card_no.`, `Expire_date`) VALUES ('$Pay_type', '$Customer_id', '$Booking_id', '$First_name', '$Last_name', '$Credit_card_no', '$Expire_date')";
if(mysqli_query($conn,$sql))
{
    echo "inserted";
}
}
?>
<section id="portfolio" class="bg-light-gray">
        <div class="container">
    <center>
    <form method="post">
        <table class="table" border="5" width="400" bgcolor="pink">
    <tr>
        <td>Pay_type</td>
        <td><input type="text" id="text" name="Pay_type" placeholder="enter the type of payment"></td>       
            </tr>
        <tr>
        <td>Customer_id</td>
        <td><input type="text" id="text" name="Customer_id" placeholder="enter the customer id"></td>
        </tr>
    <tr>
    <td>Booking_id</td>
    <td><input type="text" id="text" name="Booking_id" placeholder="enter the booking id"></td>
    </tr>
        <tr>
        <td>First_name</td>
        <td><input type="text" id="text" name="First_name" placeholder="enter the first name"></td>
        </tr>
        <tr>
        <td>Last_name</td>
        <td><input type="text" id="text" name="Last_name" placeholder="enter the last name"></td>
        </tr>
        <tr>
        <td>Credit_card_no.</td>
        <td><input type="text" id="text" name="Credit_card_no" placeholder="enter the credit card no."></td>
        </tr>
        <tr>
        <td>Expire_date</td>
        <td><input type="text" id="text" name="Expire_date" placeholder=" enter the expiry date"></td>
        </tr>
        <tr>
            <td></td>
        <td><input type="submit" value="submit" name="submit"></td>
    </tr>
        </table></form></center></div></section>
</body>
</html>