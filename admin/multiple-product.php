
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
<div class="col-lg-11 m-auto">

	<form action="insert_product.php" method="post">
    <?php 

    include('dbconnection.php');
      $num=$_POST['number'];
      for ($i=1; $i<=$num ; $i++) { 
        
      
     ?>
<br>
<br>
<h1>This is <?php echo $i; ?>  Form </h1>
<br>
<hr>
  <div class="form-group">
    <label for="email">Product Title:</label>
    <input type="text" name="Title" class="form-control" id="email">
  </div>
  <input type="hidden" name="num" value="<?php echo $i; ?>">
  <div class="form-group">
    <label for="pwd">Product Price:</label>
    <input type="number" name="Price" class="form-control" id="pwd">
  </div>

    <div class="form-group">
    <label for="pwd">Product Description:</label>
  
  <textarea class="form-control" name="Description" rows="5" id="comment"></textarea>
  </div>

  <div class="form-group">
    <label for="pwd">Product Image:</label>
    <input type="file" name="Image" class="form-control" id="pwd">
  </div>

  <div class="form-group">
    <label for="pwd">Product Keyword:</label>
    <input type="text" name="Keyword" class="form-control" id="pwd">
  </div>


 


<?php } ?>
 <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
 <input type="submit" value="Add Products" class="btn btn-lg btn-success" name="submit">
</form>
<br><br><br>
</div>

<?php 

include('includes/footer.php');

 ?>