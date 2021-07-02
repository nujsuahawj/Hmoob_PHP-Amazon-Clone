<?php 
  
  include('includes/header.php');
  include('includes/sidebar.php');
  $page='home';
 ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="welcome.php">Dashbord</a></li>
				<li class="active">Customer Orders</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Customer Orders</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Orders</div>
					<div class="panel-body">
						<div class="col-md-12">
							 <table class="table table-striped">
								    <thead>
								      <tr>
								        <th>ID</th>
								        <th>Username</th>
								        <th>Product</th>
								         <th>Price</th>
								          <th>Product Quantity</th>
								           <th>Product status</th>
								            <th>transfer ID</th>
								            <th>Done</th>
								      </tr>
								    </thead>
								    <tbody>
								    	<?php

                                       include('dbconnection.php');
                                       $query=mysqli_query($con,"select * from customer_order");
                                        
                                       while($row=mysqli_fetch_array($query)){

                                       	$id=$row['id'];
                                       	$uid=$row['uid'];
                                       	$p_name=$row['p_name'];
                                       	$p_price=$row['p_price'];
                                       	$p_qty=$row['p_qty'];
                                       	$p_status=$row['p_status'];
                                       	$tr_id=$row['tr_id'];
                                         $query1=mysqli_query($con,"select * from  user_info where user_id='$uid' ");
                                         while($row=mysqli_fetch_array($query1)){
								    	?>
								      <tr>
								        <td><?php echo $id; ?></td>
								        <td><?php echo $row['first_name']; ?> 
								       <?php echo $row['last_name']; ?></td>
								            <td><?php echo $p_name; ?></td>
								             <td><?php echo $p_price; ?></td>
								              <td><?php echo $p_qty; ?></td>
								               <td><?php echo $p_status; ?></td>
								                <td><?php echo $tr_id; ?></td>
								                <th><a href="order_delete.php?del=<?php echo $id; ?>" class="btn btn-sm btn-info"> Remove</a></th>
								      </tr>
								  <?php } } ?>
								     
								    </tbody>
								  </table>
							<br />
							<br />
						</div>
					</div>
				</div><!-- /.panel-->
				
				
				
			</div><!-- /.col-->
			<?php 
   include('includes/footer.php');
			 ?>