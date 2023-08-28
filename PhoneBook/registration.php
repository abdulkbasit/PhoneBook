<?php
require_once 'db.php';
if(isset($_POST['submit'])){
	$name1 = $_POST['fname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword =$_POST['cpassword'];
	if($name1 == '' || $username == ''  || $password == '' || $cpassword =='' || $email == ''){
		echo '<p class="RegerrorMsg">All fields are required</p>';
	} else if( $password != $cpassword){
		echo '<p class="RegerrorMsg">Passwords do not match..</p>';
	}else{
		$sql = mysqli_query($dbcon,"SELECT * FROM userdetails WHERE username = '$username' ");

       	if(mysqli_num_rows($sql)==1){
			echo '<p class="usernameerror">Username already exists</p>';
	
		} else{
			$sql = "INSERT INTO userdetails(name, username, email, password) VALUES ('$name1','$username','$email', '$password')";
			$result= mysqli_query($dbcon,$sql);
			if($result){
				echo '<p class="regsucces">Record added successfully</p>';
		}else  {
				echo '<p class="RegerrorMsg">There was error while adding record</p>';  
			}
		}
	}
}
?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="reg.css">
</head>

<body>


<div class="signup-form">
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<h2>Register</h2>
			<p class="hint-text">Create your account.</p>
			<div class="form-group">
				<div class="row">
				<div class="col"><input type="text" class="form-control" placeholder="First Name" name="fname"  required></div>
				<div class="col"><input type="text" class="form-control" placeholder="Username" name="username"  required></div>
			</div>
</div>
			<div class="form-group">
				<input type="text" class="form-control" name="email" placeholder="Email" required>
			</div>
			<div class="form-group col-12">
				<input type="password" class="form-control" placeholder="Password" name="password" id="loginPassword" required>
			</div>
			<div class="form-group col-12">
				<input type="password" class="form-control" placeholder="Confirm password" name="cpassword" id="loginUser" required>
			</div>
			<div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
			<input type="submit" value="Registration Now" name="submit" class="btn btn-success btn-lg btn-block">
			<p class="mt-3"> Already have an account?<a href="index.php"> please login here </a></p>
			</form>
	</div>

</body>
</html>