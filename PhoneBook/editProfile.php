<?php
session_start(); 
  require_once 'db.php';
   // $getid = $_GET['editid'];
   // update
   if(isset($_POST['btnupdate'])){
	    $profileid = $_POST['userid'];
	   $fname = $_POST['fname'];
	   $username = $_POST['uname'];
	   $email = $_POST['uemail'];
	   
	   
   $qu = "UPDATE userdetails SET name='$fname', username= '$username',email= '$email' 
   WHERE userid ='$profileid'";
    $run_query =mysqli_query($dbcon,$qu);
	if($run_query){
		
    header("Location:viewProfile.php?update=profileupated"); 
   }else  {
	 echo '<p class="errorMsg">There was error while updating record</p>';  
   
	}	
   }
   $profileid = $_GET['editProfile']; // GETTING ID FROM URL
   $query = "SELECT * FROM userdetails WHERE userid ='$profileid' ";
    $result = mysqli_query($dbcon,$query);
	 $drow = mysqli_fetch_assoc($result);
	 
?>
  <html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="changepassword.css">
</head>
<body>
      <div>
        <?php  include_once 'home.php';?>
    </div>
    <div class="signup-form">
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<h2>Update Profile</h2>
      <input type="hidden" name="userid" value="<?php echo $drow['userid'];?>"><br>
      <div class="form-group col-12">
			<label for="loginUser">Name</label>
			<input type="text" class="form-control" placeholder="Enter name" name="fname" id="loginUser" required>
  </div>

      <div class="form-group col-12">
			<label for="loginPassword">Username</label>
			<input type="text" class="form-control" placeholder="Enter Username" name="uname" id="loginPassword" required>
  </div>

      <div class="form-group col-12">
			<label for="loginPassword">Email</label>
				<input type="text" class="form-control" placeholder="Enter email" name="uemail" id="loginPassword" required>
  </div>
			<input type="submit" value="Update" name="btnupdate" class="btn btn-danger">
      </form>
	</div>


  </body>
  </html>
  