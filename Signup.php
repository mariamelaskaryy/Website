<?php session_start(); ?>
<link href="css/SignUp.css" rel="stylesheet" type="text/css">

<br>
<form action="" method="post"  class='register'>
<h1>Register:</h1>
  Name:<br>
  <input type="text" name="Name" id='Name' required><br> <br>
  Email:<br>
  <input type="email" name="Email" required> <br> <br>
  Password:<br>
  <input type="password" id="password" name="Password" required><br><br>
  Confirm Password:<br>
  <input type="password" id="confirmPassword"  name="CPassword" required><br><br>
    
  <input type="submit" value="Sign Up" name="Submit" class='btn' > 
    <br>
    <br>
  <a>Already have an account?</a>
  <a href="SignIn.php">Sign In</a>

</form>


<?php
include "classes.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Jogs";
$conn = new mysqli($servername, $username, $password, $dbname);

$nameError="";
$emailError="";
$emailError2="";
$passwordError="";
$conPasswordError="";    
$matchPasswordError="";

$validation=false;
$role="User";

if(isset($_POST['Submit']))
{
    $sql= "Select * from Register Where Email=' ".$_POST["Email"]." ' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    
    if(!$validation)
    {
        if(($_POST['Password']) != ($_POST['CPassword']))
        {
            $matchPasswordError="Passwords don't match.";
            $validation=true;   
            echo"Paswords Don't Match";
        }
        
        if( !(empty($row[2])))
        {
            $emailError2="Email was used before";
            $validation=true;
        }
    }
    
    if($validation==false)
    {
        $role="User";
       $x = new accounts();
      $result = $x->register($_POST['Name'],'$role',$_POST['Email'],$_POST['Password'],$_POST['CPassword']);
       if($result){
        header ('Location:Homepage.php');
       }
       else{echo "Error Signing up";
    }
    }
}

?>


