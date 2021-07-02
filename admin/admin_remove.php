<?php 

 include('dbconnection.php');

 $del=$_GET['del'];
  if (mysqli_query($con,"delete from  users where id='$del' ")) {
     echo "<script> alert('Admin remove Successfully')</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	
		self.location = "http://localhost/amazonclone/admin/widgets.php";
</script>
</body>
</html>