 <?php
 include('dbconnection.php');
 if (isset($_POST['submit'])) {

     echo $product_id=$_POST['edit'];

      echo  $title=$_POST['title'];
       echo  $price=$_POST['price']; 
        echo $description=$_POST['description']; 
        echo $image=$_FILES['img']['name']; 
         $temp=$_FILES['img']['tmp_name'];
       $Keyword=$_POST['Keyword'];
       echo  $categories=$_POST['categories'];
       echo  $brand=$_POST['brand'];
        move_uploaded_file($temp, "product_images/$image");
        $query1=mysqli_query($con,"update products set product_cat ='$categories', product_brand='$brand', product_title=' $title', product_price='$price', product_desc='$description', product_image='$image',product_keywords=' $Keyword' where product_id='$product_id' ");


           
        if ($query1) {
            
           echo "<script>alert('Product Updated Successfully!!!')</script>";
          
        }

 }

 

 ?>

    <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <title>Document</title>
   </head>
   <body>
    <script>
      self.location = "http://localhost/amazonclone/admin/product.php";
    </script>
   </body>
   </html>