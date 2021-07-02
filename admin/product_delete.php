<?php 

 include('dbconnection.php');

 $del=$_GET['del'];
  if (mysqli_query($con,"delete from  products where product_id='$del' ")) {
     echo "<script> alert('Product remove Successfully')</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	
		self.location = "http://localhost/amazonclone/admin/product.php";
</script>
</body>
</html>