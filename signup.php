<?php
include "head.php";
include "dbconfig.php";

?>

    <?php
    if(isset($_POST['submit']))
    {
  extract($_POST);

   
    $sql1="INSERT INTO `customer_detail` (`Customer_id`, `First_name`, `Last_name`, `Address`, `Postcode`, `State`, `Mobile_no.`, `E_mail`, `password`) VALUES (NULL, '$fname', '$lname', '$addr', '$post', '$state', '$mob', '$email', '$pass')";
     if(mysqli_query($conn,$sql1));
    { 
      echo "inserted";
    }
    }  ?>  <section id="portfolio" class="bg-light-gray">
    <div class="container">
    <center>
        
    <form method="post"><table class="zoo">
    <tr>   
        <td>Email</td>
        <td><input class="form-control" type="email" id="email" name="email" required></td>
    </tr>
       <tr>
        <td>Password</td>
        <td><input class="form-control" type="password" id="password"name="pass" required>

    </tr>
<tr>
    <td>First Name</td>
    <td><input class="form-control" type="text" id="user_name" name="fname"  required>
    </tr>
        <tr>
    <td>Last Name</td>
    <td><input class="form-control" type="text" id="lname" name="lname" required>
    </tr>
    <tr>
    
    <td>Mobile No</td>
        <td><input class="form-control" type="tel" id="mobile_no" name="mob" required></td>
</tr>
<tr>
    
<td>State</td>
<td> <input class="form-control" type="text" id="state" name="state" required>
</tr>
        <tr>
    
<td>Address</td>
        <td> <textarea class="form-control" type="text" id="city" name="addr" required></textarea></td>
</tr>
         <tr>
    
<td>Pin Code</td>
        <td> <input class="form-control" type="number" id="city" name="post" required></td>
</tr>
        
<tr>
    <td>   </td>
      <td> <input type="submit" name="submit" value="Sign Up"> </td>
<td>  </td>
</tr>
        
        </table></form></center>
<?php
include 'footer.php';
?> 