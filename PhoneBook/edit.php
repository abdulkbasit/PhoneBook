<?php
 ob_start();
  require_once 'db.php';
   // $getid = $_GET['editid'];
   // update
   if(isset($_POST['update1'])){
	    $getid = $_POST['contact_id'];
	   $fname = $_POST['fname'];
	   $phone = $_POST['phone'];
	   $address = $_POST['address'];
     	if($fname == ''  || $phone =='' || $address == ''  ){
		echo '<p class="addusererror">Fields marked with * are required</p>';
	} 
   $qu = ("UPDATE contactdetails SET contact_name='$fname',phone= '$phone',address='$address' 
   WHERE contact_id ='$getid'");
    $run_query =mysqli_query($dbcon,$qu);
	if($run_query){
	header("Location:view_user.php");	
  
   }else  {
	 echo '<p class="errorMsg">There was error while updating record</p>';  
   
	}
   }
   $getid = $_GET['editid']; // GETTING ID FROM URL
   $query = "SELECT * FROM contactdetails WHERE contact_id ='$getid' ";
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
			<h2>Update Contacts</h2>
      <input type="hidden" name="contact_id" value="<?php echo isset($drow['contact_id']) ? $drow['contact_id'] : '';?>"><br>

			<div class="form-group col-12">
			<label for="loginUser">Name</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter name" value="<?php
        echo isset($drow['contact_name']) ? $drow['contact_name'] : '';?>" required>
			</div>

			<div class="form-group col-12">
			<label for="loginPassword">Phone</label>
      <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value="<?php echo
        isset($drow['phone']) ? $drow['phone'] : '';?>" required>
			</div>

       <div class="form-group col-12">
			<label for="loginPassword">Address</label>
      <input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php
        echo isset($drow['address']) ? $drow['address'] : '';?>" required>
			</div>

			<input type="submit" value="Update" name="update1" class="btn btn-danger">
      </form>
	</div>


  
  </body>
  </html>
  