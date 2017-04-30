<?php
include 'head.php';
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'dbconfig.php';
    $sql="INSERT INTO `admin` (`A_id`, `A_name`, `A_email`, `password`) VALUES (NULL, '$A_name', '$A_email', '$pass')";
    if(mysqli_query($conn,$sql))
    {
        echo "inserted";
    }
}
?>
<html><head>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="mystyle.css" rel="stylesheet">
    <title>Admin</title>
    </head>
<body><section id="portfolio" class="bg-light-gray">
    <div class="container">
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
    <form method="post">
    <center><table class="table" border="5" width="300">
    
        <tr>
        <td>A_name</td>
        <td><input type="text" id="text" name="A_name" placeholder="enter the admin name"></td>
        </tr>
    <tr>
        <td>A_email</td>
<td><input type="text" id="text" name="A_email" placeholder="enter the admin e_mail"></td>
        </tr>
         <tr>
        <td>Password</td>
<td><input type="password" id="text" name="pass" placeholder="enter the admin e_mail"></td>
        </tr>
        <tr>
        <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
        </table></center></form></div></section>
 </body>
</html>