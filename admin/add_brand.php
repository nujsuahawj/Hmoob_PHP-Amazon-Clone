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
				<li ><a href="brand.php">Brand</a></li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Add </h1>
			</div>
		</div><!--/.row-->
<br>
<br>
   <form action=" multiple-product.php" method="post">
   <div class="form-group">
    <label for="pwd"></label>
    <input type="number" name="number" class="form-control" id="pwd" >
  </div>
  <input type="submit" class="btn btn-lg btn-primary" value="Submit">
 </form>

<?php 

include('includes/footer.php');

 ?>