<?php 

 include('dbconnection.php');

 $del=$_GET['del'];
  if (mysqli_query($con,"delete from  customer_order where id='$del' ")) {
     echo "<script> alert('Order remove Successfully')</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	
		self.location = "http://localhost/amazonclone/admin/elements.php";
</script>
</body>
</html>