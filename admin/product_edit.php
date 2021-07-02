<?php 
 include('includes/header.php');
  include('includes/sidebar.php');
  
 ?>


  <?php 
       include('dbconnection.php');
          $edit=$_GET['edit'];
             $query =mysqli_query($con,"select * from products where product_id='$edit'");
             while($row=mysqli_fetch_array($query)){
               $product_title= $row['product_title'];
              $product_price= $row['product_price'];
               $product_desc= $row['product_desc'];
                $product_image= $row['product_image'];
                 $product_keywords= $row['product_keywords'];

                 $product_cat=$row['product_cat'];
                 $product_brand=$row['product_brand'];

             
                 
             }
       ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li ><a href="welcome.php">Dashbord</a></li>
				<li ><a href="product.php">Product</a></li>
				<li class="active"> Add Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Add Product</h1>
			</div>
		</div><!--/.row-->
<br>
<br>
   <form action=" product_update.php" method="post" enctype="multipart/form-data">

   <div class="form-group">
    <label for="pwd">Product Title</label>
    <input type="text" name="title" required="" value="<?php echo $product_title; ?>" class="form-control" id="pwd" >
  </div>
   
<div class="form-group">
    <label for="pwd">Product Price</label>
    <input type="text" value="<?php echo $product_price; ?>"  name="price" class="form-control" id="pwd" >
  </div>

   
  <div class="form-group">
    <label for="pwd">Product Description</label>
    <textarea name="description"  class="form-control" rows="5" id="comment"><?php echo $product_desc; ?></textarea>
  </div>

   
  <div class="form-group">
    <label for="pwd">Product Images</label>
    <img src="product_images/<?php echo $product_image;?>" alt="" width="100" height="100">
    <input type="file" name="img" class="form-control" id="pwd"  required="">
  </div>
     <input type="hidden" value="<?php echo $_GET['edit']; ?>" name="edit">
  <div class="form-group">
    <label for="pwd">Product Keyword</label>
    <input type="text" required="" value="<?php echo $product_keywords; ?>" name="Keyword" class="form-control" id="pwd" >
  </div>

   <div class="form-inline m-auto ">
   	<br><br>
   	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="form-group">
  <label for="sel1">Select Categories:</label>
  <select class="form-control" name="categories" value="<?php echo  $product_cat;  ?>" id="sel1">
    <option value="1">Electronics</option>
    <option value="2">Ladies Wear</option>
    <option value="3">Mens Wear</option>
    <option value="4">Kids Wear</option>
    <option value="5">Home Appliances</option> 
    <option value="6">Sportss</option>
  </select>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div class="form-group">
  <label for="sel1">Select Brand:</label>
  <select class="form-control" name="brand" value="<?php echo  $product_brand;  ?>" id="sel1">
    <option value="1">HP</option>
    <option value="2">Samsung</option>
    <option value="3">Apple</option>
    <option value="4">Sony</option>
     <option value="5">LG</option>
      <option value="6">Biba</option>
       <option value="7">Flying Machine</option>
        <option value="8">Nike</option>
         <option value="9">Adidas</option>
         <option value="10">Kidzee</option>
         <option value="11">Ikea</option>
         <option value="12">Philips</option>
  </select>
</div>

   </div>
   <br><br>
  <input type="submit" class="btn btn-lg btn-primary" name="submit" value="update">
 </form>




<?php 

include('includes/footer.php');

 ?>