<?php
session_start();
include 'db.php';
if(isset($_POST['submit'])){
	$username = $_POST['username1'];
	$password = $_POST['password'];
	
	if($username =='' || $password == ''){
	echo '<p class="errorMsg">All the fields are required</p>'; 
	}else{
		$sql = mysqli_query($dbcon,"SELECT * FROM userdetails WHERE username = '$username' AND password = '$password'");
        if(mysqli_num_rows($sql) == 1) {
	 $member = mysqli_fetch_array($sql);
		
			$_SESSION['username'] = $username;
			$_SESSION['userid'] = $member['userid'];
			
			header('Location: dashboard.php?d=dashboard'); 
		
}else{
	echo '<p class="errorMsg">Invalid username or password</p>';
}
	
	}
	}

?>
<html>

<head>
	<title>Phone Book</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="index.css">

</head>


<body>
	<div class="signup-form">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="container">
			<h2>Login</h2>
			<p class="hint-text">Please login</p>
</div>
			<div class="form-group">
			<label for="loginUser">User Name</label>
				<input type="text" class="form-control" name="username1" id="loginUser" required>
			</div>
			<div class="form-group">
			<label for="loginPassword">Password</label>
				<input type="password" class="form-control" name="password" id="loginPassword" required>
			</div>
			<input type="submit" value="Login" name="submit" class="btn btn-success btn-lg btn-block">
			<p id="reg"> Not a member yet?<a href="registration.php"> Register Here</a></p>
			</form>
	</div>

</body>

</html>