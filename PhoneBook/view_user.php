<?php
session_start();
$fkusername=$_SESSION['username'];
?>
<html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="viewall.css">
<script>
   function ConfirmDelete() {
  return confirm("Do you want to delete?");
}
</script>

</head>
<body>
<div>
        <?php  include_once 'home.php';?>
    </div>
  <div class="container mt-3">


   <table class="table table-hover table-dark table-stripted">
     <h1>Contacts</h1>
  <thead>
    <tr>
  <th>S.No</th>
  <th>Name</th>
  <th>Phone</th>
  <th>Address</th>
  <th>Action</th>
</tr>
  </thead>
  <?php
   require_once 'db.php';
   $count= 1;
   $query = "SELECT * FROM contactdetails where fkusername='$fkusername'";
    $result = mysqli_query($dbcon,$query);
	 while($row = mysqli_fetch_array($result)){?>
  
  <tbody>
  <tr>
  <td > <?php echo $count;?></td>
  <td > <?php echo $row["contact_name"];?></td>
  <td ><?php echo $row["phone"];?></td>
  <td ><?php echo $row["address"];?></td>
  <td>
  <a href="delete.php?deleteid=<?php echo $row["contact_id"]; ?> "id="del" Onclick="return ConfirmDelete()">Delete</a>
 <a href="edit.php?editid=<?php echo $row["contact_id"]; ?>"id="edt"  >Edit</a>
  </td>
  </tr>
 <?php $count++;}?>
	 </table>
   </tbody>
   </div>

  <!-- <script>
    $(document).ready(function(){
      $('.searh-btn').click(function(){
        $('input').toggleClass('active').val('');
      });
      $('input').on('keyup',function(){
        var value = $(this).val().toLowerCase();
        $('tbody tr').filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
      });
    });
  </script> -->



</body>

</html>