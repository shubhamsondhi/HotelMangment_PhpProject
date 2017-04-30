<?php
include 'head.php';
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'dbconfig.php';
    $sql="INSERT INTO `invoice_billing` (`Id`, `Status`, `Description`) VALUES ('$Id', '$Status', '$Description')";
    if(mysqli_query($conn,$sql))
    {
    echo "inserted";
    }
}
?>

<html>
<head><link href="bootstrap.css" rel="stylesheet">
<link href="mystyle.css" rel="stylesheet">
<title>Invoice_Billing</title></head>
<body><section id="portfolio" class="bg-light-gray">
    <div class="container">
    
    <form method="post">
        <center>
    <table class="table" border="1" width="400">
    <tr>
        <td>Id</td>
<td><input type="text" id="text" name="Id" placeholder="enter the id"></td>
    </tr>
        <tr>
<td>Status</td>
<td><input type="text" id="text" name="Status" placeholder="enter the status"></td>
</tr>
<tr>
<td>Description</td>        
<td><input type="text" id="text" name="Description" placeholder="enter the description"></td>        
</tr>
<tr>
<td></td>        
    <td><input type="submit" name="submit" value="Submit"></td>    
        </tr>
            </table></center></form></div></section>
    </body>
</html>