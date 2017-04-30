<?php
include 'head.php';
if(isset($_POST['submit']))
{
extract($_POST);
include 'dbconfig.php';
$sql="INSERT INTO `customer_detail` (`Customer_id`, `First_name`, `Last_name`, `Address`, `Postcode`, `State`, `Mobile_no.`, `E_mail`) VALUES ('$customer_id', '$firstname', '$lastname', '$Address', '$Postcode', '$State', '$mobile_no', '$E_mail')";
    if(mysqli_query($conn,$sql)){
        
        echo "inserted";
    }
}
?>
<html>
<head><link href="bootstrap.css" rel="stylesheet">
    <link href="mystyle.css" rel="stylesheet">
    <title>Customer_detail</title>
    </head>
<body>
    <section id="portfolio" class="bg-light-gray">
    <div class="container">
    <form method="post">
    <center><table class="table" border="5" width="300">
        <tr>
            <td>customer_id</td>
        <td><input type="text" id="text" name="customer_id" placeholder="enter the id of customer"></td>
        </tr>
    <tr>
        <td>First_Name</td>
        <td><input type="text" id="text" name="firstname" placeholder="enter the first name"></td>
        </tr>
    <tr>
        <td>Last_Name</td>
        <td><input type="text" id="text" name="lastname" placeholder="enter the last name"></td>
        </tr>
    <tr>
        <td>Address</td>
        <td><input type="text" id="text" name="Address" placeholder="enter the address"></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td><input type="text" id="text" name="E_mail" placeholder="enter the e_mail"></td>
        </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" id="password" name="password" placeholder="enter the password"></td>
        </tr>
        <tr>
        <td>mobile-no.</td>
        <td><input type="text" id="text" name="mobile_no" placeholder="enter the mobile_no."></td>
        </tr>
        <tr>
        <td>State</td>
            <td><input type="text" id="text" name="State" placeholder="enter the state"></td>
        </tr>
        <tr>
        <td>Postcode</td>
        <td><input type="text" id="text" name="Postcode" placeholder="enter the postcode"></td></tr>
        <tr>
        <td></td>
        <td><input type="submit" name="submit" value="submit"></td>
        </tr>
        </table></center></form></div></section>
    </body>
</html>
