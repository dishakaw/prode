<?php
	include "dbconnect.php";

    $s="select id from signup order by id desc";
	$rs=mysqli_query($con,$s);
	$id=0;
		while($r=mysqli_fetch_array($rs))
		{
			$id=$r[0];
			break;
		}
	if($id==0)
			$id=1001;
	else
			$id=$r[0]+1;


	if(isset($_POST["btn"]))
	{
		$a=$_POST["t1"];
		$b=$_POST["t2"];
		$c=$_POST["t3"];
		$d=$_POST["t4"];
	
		
		
			$s="insert into signup values('$a','$b','$c','$d')";
			mysqli_query($con,$s);
			echo "<script>alert('Sign Up Complete')</script>";		
			header("location:page_login.php");
	}
?>

<html>
	<head>
		<title>SignUp page</title>
	</head>
	<body>
		<br>
		<br>
		<br>
		<br>
        <br>
		<br>
		<br>
		<br>
			
			<center>
			<form method="post" enctype="multipart/form-data" action="page_signup.php">
			<table border=1 cellpadding=10>
				<tr>
					<td colspan=2 align=center>SIGNUP HERE!!
				<tr>
					<td>Enter User ID
					<td><input type="text" name="t1" value="<?php echo $id ?>" disabled>
				<tr>
					<td>Enter User Name
					<td><input type="text" name="t2">	
				<tr>
					<td>Enter EMAIL
					<td><input type="email" name="t3">
				
				<tr>
					<td>Enter Password
					<td><input type="password" name="t4">		
				<tr>
					<td colspan=2 align="center"><input type="submit" value="signup" name="btn">	
			</table>
			</form>
			</center>
	</body>	
</html>		