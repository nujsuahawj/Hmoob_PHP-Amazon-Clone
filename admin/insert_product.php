<?php 

   include('dbconnection.php');
    
    
    	
      $title=$_POST['title'];
       $price=$_POST['price']; 
       $description=$_POST['description']; 
       $image=$_FILES['image']['name']; 
        $temp=$_FILES['image']['tmp_name'];
       $Keyword=$_POST['Keyword'];
        $categories=$_POST['categories'];
        $brand=$_POST['brand'];

  move_uploaded_file($temp, "product_images/$image");
   $query=mysqli_query($con,"insert into products(product_cat,product_brand,product_title, product_price, product_desc,product_image,product_keywords)values
   	   ('$categories','$brand','$title','$price', '$description','$image','$Keyword' )");
   if ($query) {
   	 echo "<script>alert('Product Add Successfully')</script>";
   }else{
   	echo "not";
   }
   
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	self.location = "http://localhost/amazonclone/admin/add_product.php";
	
</script>
</body>
</html>