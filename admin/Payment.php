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
				<li class="active">Received Payment</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Received Payment</h1>
			</div>
		</div><!--/.row-->
    

 
    <div class="col-lg-8 m-auto">
    	
     <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th> User Name</th>
        <th>Amount</th>
        <th>Transfer Id</th>
       
         
      </tr>
    </thead>
    <tbody>
    	 <?php 

           include('dbconnection.php');
           $query=mysqli_query($con,"select * from received_payment");
           while ($row=mysqli_fetch_array($query)) {
           
          
    	  ?>
      <tr>
        <td></td>
        <td></td>
         
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
    </div>





 <?php 
   include('includes/footer.php');
  ?>
  