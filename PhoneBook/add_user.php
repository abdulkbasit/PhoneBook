<?php
session_start();
$fkusername=$_SESSION['username'];

require_once 'db.php';
if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	if($fname == ''  || $phone =='' || $address == ''  ){
		echo '<p class="aderrorMsg">All the fields are required</p>';
	} else {
		$sql = "INSERT INTO contactdetails(contact_name	,phone,address, fkusername) VALUES ('$fname','$phone', '$address','$fkusername')";

$result= mysqli_query($dbcon,$sql);
		if($result){
	   echo '<p class="addsucces">Record added successfully</p> ';
   }else {
	 echo '<p class="aderrorMsg">There was error while adding record</p>';  
   
	}	
}
}

?>


<html>

<head>
    <title>Phone Book</title>
    <link rel="stylesheet" type="text/css" href="changepassword.css">
</head>

<body>
    <div>
        <?php  include_once 'home.php';?>
    </div>
    <div class="signup-form">
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<h2>Add User Details</h2>
			<div class="form-group col-12">
			<label for="loginUser">Name</label>
			<input type="text" class="form-control" placeholder="Enter name" name="fname" id="loginUser">
			</div>

			<div class="form-group col-12">
			<label for="loginPassword">Phone</label>
			<input type="number" class="form-control" placeholder="Enter phone number" name="phone" id="loginPassword">
			</div>

            <div class="form-group col-12">
			<label for="loginPassword">Address</label>
			<input type="text" class="form-control" placeholder="Enter address" name="address" id="loginPassword">
			</div>

			<input type="submit" class="btn btn-danger" value="Add" name="submit" >
</form>
	</div>
	
	
</body>

</html>