<?php 
 include('includes/header.php');
  include('includes/sidebar.php');
  $page='product';
 ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li ><a href="welcome.php">Dashbord</a></li>
				<li class="active">Brand</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Brands</h1>
			</div>
		</div><!--/.row-->
    

 
    <div class="col-lg-8 m-auto">
    	
     <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Brand Title</th>
       
         
      </tr>
    </thead>
    <tbody>
    	 <?php 

           include('dbconnection.php');
           $query=mysqli_query($con,"select * from brands");
           while ($row=mysqli_fetch_array($query)) {
           
          
    	  ?>
      <tr>
        <td><?php echo $row['brand_id']; ?></td>
        <td><?php echo $row['brand_title']; ?></td>
         
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
    </div>





 <?php 
   include('includes/footer.php');
  ?>
  