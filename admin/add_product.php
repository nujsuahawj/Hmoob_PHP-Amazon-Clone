<?php 
 include('includes/header.php');
  include('includes/sidebar.php');
  
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
   <form action=" insert_product.php" method="post" enctype="multipart/form-data">

   <div class="form-group">
    <label for="pwd">Product Title</label>
    <input type="text" name="title" required="" class="form-control" id="pwd" >
  </div>
   
<div class="form-group">
    <label for="pwd">Product Price</label>
    <input type="text" name="price" required="" class="form-control" id="pwd" >
  </div>


  <div class="form-group">
    <label for="pwd">Product Description</label>
    <textarea name="description" class="form-control" rows="5" id="comment"></textarea>
  </div>


  <div class="form-group">
    <label for="pwd">Product Images</label>
    <input type="file" name="image" required="" class="form-control" id="pwd" >
  </div>

  <div class="form-group">
    <label for="pwd">Product Keyword</label>
    <input type="text" name="Keyword" required="" class="form-control" id="pwd" >
  </div>

   <div class="form-inline m-auto ">
   	<br><br>
   	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="form-group">
  <label for="sel1">Select Categories:</label>
  <select class="form-control" name="categories" id="sel1">
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
  <select class="form-control" name="brand" id="sel1">
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
  <input type="submit" class="btn btn-lg btn-primary" value="Submit">
 </form>

<?php 

include('includes/footer.php');

 ?>