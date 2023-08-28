<?php
session_start();
//echo $_SESSION['username'];
//echo $_SESSION['contact_id'];

?>
<html>
<head>
<title>Vieiw Profile</title>
  <link rel="stylesheet" type="text/css" href="viewall.css">
</head>
      <div>
        <?php  include_once 'home.php';?>
    </div>


  <div class="container mt-3">
    <h1 class="text-center">Profile</h1>
   <table class="table table-dark table-hover">
  <thead>
  <tr>
  
  <th>Name</th>
  <th>Username</th>
  <th>email</th>
  <th>Action</th>
  </tr>
  </thead>
  <?php
   require_once 'db.php';
   
   $query = "SELECT * FROM userdetails where userid= '".$_SESSION['userid']."'";
    $result = mysqli_query($dbcon,$query);
	 $row = mysqli_fetch_assoc($result)?>
  
  <tbody>
  <tr>
  <td> <?php echo $row["name"];?></td>
  <td><?php echo $row["username"];?></td>
  <td><?php echo $row["email"];?></td>
  <td>
 <a href="editProfile.php?editProfile=<?php echo $row["userid"]; ?>" id="edt">Edit</a>
  </td>
  </tr>
</tbody>
	 </table>
	   </div>
</body>
</html>
