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
	}
?>
<html lang="en" dir="ltr">
  <head>
  <form method="post" action="page_login.php">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="loginPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="#">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login" name = "btn">
          </div>
          <div class="signup-link">Not a member? <a href="page_signup.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>

<!-- <html>
	<head>
		<title>login page</title>
		<link rel="stylesheet" href="loginPa.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	</head>
	<body>
		<br>
		<br>
		<br>
		<br>
        <br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
			<center>
			<form method="post" action="page_login.php">
			<table border=1 cellpadding=10>
				<tr>
					<td colspan=2 align=center>LOGIN HERE!!
				<tr>
					<td>
					<td><input type="text"placeholder="Username" name="t1">
				<tr>
					<td><<i class="fas fa-user"></i>>
					<td><input type="password" placeholder="Password" name="t2">
				<tr>
					<td colspan=2 align="center"><input type="submit" value="login" name="btn">
				<tr>
					<td colspan=2 align=center><a href="page_signup.php">Create A New Account</a>	
			</table>
			</form>
			</center>
	</body>	
</html>	 -->