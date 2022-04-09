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
		<link rel="stylesheet" href="login_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	</head>
	<body>
		<div class="container">
      <div class="wrapper">
        <div class="title"><span>Signup Form</span></div>
        <form method="post" enctype="multipart/form-data" action="page_signup.php">
          <div class="row">
            <input type="text" name="t1" value="<?php echo $id ?>" disabled>           
          </div>
          <div class="row">
            <input type="text" name="t2" placeholder="Username" required>         
          </div>   
          <div class="row">
            <input type="email" name="t3" placeholder="Email_id"required>     
          </div>

          <div class="row">
            <input type="password" name="t4" placeholder="Password" required>
            
          </div>
          <div class="row button">
            <input type="submit" value="Sign Up"  name="btn">
          </div>      
        </form>
      </div>
    </div>	
	</body>	
</html>