<?php 

 include('dbconnection.php');

 $del=$_GET['del'];
  if (mysqli_query($con,"delete from  contact_us where id='$del' ")) {
     echo "<script> alert('Message remove Successfully')</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	
		self.location = "http://localhost/amazonclone/admin/contect_u.php";
</script>
</body>
</html>