<?php
session_start();
include("head.php");
include("dbconfig.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"SELECT * FROM `admin` WHERE A_email='$loginid' and password='$pass'") ;
    
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["admin"]=$loginid;
//         echo "ss";
        header("location:index.php");
	}
}



?>             <!-- Page Content -->
        <section id="portfolio" class="bg-light-gray">
    <div class="container">
        
        <div id="page-content-wrapper">
            
                    <!-- Introduction Row -->
            

<form name="form1" method="post" >
      <table class="table" border="0">
        <tr>
          <td><span >Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2" class="form-control"></td>
        </tr>
        <tr>
          <td><span>Password</span></td>
          <td><input name="pass" type="password" id="pass2" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2">
              <span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span>
            </td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login" class="btn btn-info">		  </td>
        </tr>
       
      </table>
     
            </form></div><?php include '../footer.php'; ?>