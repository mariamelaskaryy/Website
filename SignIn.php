<?php session_start(); ?>
<link href="css/SignUp.css" rel="stylesheet" type="text/css">


<br>
<form action="" method="post"  class='register'>
<h1>Log In:</h1>
  Email:<br>
  <input type="email" name="Email" required> <br> <br>
  Password:<br>
  <input type="password" id="password" name="Password" required><br><br>
    
  <input type="submit" value="Sign In" name="Submit" class='btn' > 
    <br>
    <br>
  <a>Don't have an account?</a>
  <a href="SignUp.php">Sign Up</a>

</form>

<?php
session_start();
include "classes.php";


if(isset($_POST['Submit']))
{
  $_SESSION['accounts']=new accounts();
  $result=$_SESSION['accounts']->login($_POST['Email'],$_POST['Password']); 
  if($row=mysqli_fetch_array($result))    
  {
      
      $_SESSION['accounts']->id=$row[0];
      $_SESSION['accounts']->name=$row[1];
      $_SESSION['accounts']->email=$row[2];
      $_SESSION['accounts']->password=$row[3];
      $_SESSION['accounts']->cpassword=$row[4];
      $_SESSION['accounts']->role=$row[5];
      header("location:Homepage.php");
  }
  else    
  {
 echo "<h2  class='incorrect'>Incorrect Phone number or Password.</h2>";
  }
}


ob_end_flush();
?>
