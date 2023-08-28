<?php
session_start();
include 'db.php';
if(isset($_POST['passchange'])){
	$oldpass = $_POST['oldpass'];
	 $newpass = $_POST['newpass'];
	 $cnewpass = $_POST['cnewpass'];
	
	if($oldpass =='' || $newpass == ''|| $cnewpass==''){
	echo '<p class="cperror">All the fields are required</p>'; 
	}else{
		$sql =mysqli_query($dbcon, "SELECT * FROM userdetails where userid= '".$_SESSION['userid']."'");

        if(mysqli_num_rows($sql) == 1) {
	 $member = mysqli_fetch_assoc($sql);
		
	 if($member['password']!=$oldpass){
		echo '<p class="cperror">Your old password is invalid</p>';
	 } 
	 else
		if($newpass!= $cnewpass){
		echo '<p class="cperror">Your passwords do not match</p>';
	}else {
		$query = mysqli_query($dbcon,"update userdetails set password='$newpass' where userid= '".$_SESSION['userid']."'");
		if($query){
			echo '<p class="cpsucess">Password updated</p>';
		}else{
			echo 'error';
		}
	}
		
}// end num rowns

	
	}/// end empty fields
	}

?>
<html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="changepassword.css">
</head>
<style> 
</style>
<body>
		<div>
        <?php  include_once 'home.php';?>
    	</div>

	<div class="signup-form">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<h2>Change password</h2>
			
			<div class="form-group col-12">
			<label for="loginUser">Old password</label>
			<input type="text" class="form-control" placeholder="Enter old password" name="oldpass"  id="loginUser" >
			</div>

            <div class="form-group col-12">
			<label for="loginPassword">New password</label>
				<input type="text" class="form-control" placeholder="Enter New password" name="newpass" id="loginPassword">
			</div>

			<div class="form-group col-12">
				<label for="loginPassword">Confirm new password</label>
				<input type="text" class="form-control" placeholder="Enter Confirm new password" name="cnewpass" id="loginPassword">
			</div>
			<input type="submit" class="btn btn-danger " value="Change" name="passchange" class="addsubmit-btn">
			</form>
			</div>





</body>
</html>