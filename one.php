<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-5">
				<div class="card">
					
					<div class="card-body">
						<h2 class="card-title">login</h2>
						<form action="part3.php" method="post">
							<div class="form-group">
								<label>username:
									<input type="text" name="user" class="form-control">
								</label>
							</div>
							<div class="form-group">
								<label>password:
									<input type="password" name="pass" class="form-control">
								</label>
							</div>
							
							<button type="submit" name="login" class="btn btn-primary">login</button>
							<a href="resetpassword.php">reset password</a>
						</form>
					</div>
					</div>
				</div>
</body>
</html>
<?php 
include 'connection.php';
if(isset($_POST['login'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];

	//query to vheck if details match
	$login_query="SELECT * FROM 6470users WHERE username='$username' AND password_hash='$password'";
	//$enc=sha1($password);
	//run query
	$result=mysqli_query($conn,$login_query);
	//check for query error

	if(!$result){
		die("query failed:".mysqli_error($conn));
	}
	$countResult=mysqli_num_rows($result);
	//check if username $password matched
	if($countResult==1){
		//user and passoword matched
		//redirect to admin dashboard
		header("location: dashboard.php");
	}
		echo "<b>invalid username or password</b>";
	} 


 ?>