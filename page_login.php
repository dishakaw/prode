<?php
	include "dbconnect.php";
	if(isset($_POST["btn"]))
	{
		$uid=$_POST["t1"];
		$upass=$_POST["t2"];
		
		$s="select * from signup where u_name='$uid' and pass='$upass'";
		$rs=mysqli_query($con,$s);
		$c=mysqli_num_rows($rs);
		if($c==0)
			echo "<script>alert('INVALID ID OR PASSWORD')</script>";
		else
			header("location:page_home.php");
     
  
      $body .= '<img src="LOGIN.jpg" /><br/>';
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prode Login</title>
    <link rel="stylesheet" href="login_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
      
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form  method = "post" action="page_home.php">
          <div class="row">
        
            <input type="text" placeholder="Username" required>
          </div>
          <div class="row">
            
            <input type="password" placeholder="Password" required>
          </div>
          
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="page_signup.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>