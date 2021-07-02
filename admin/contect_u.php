

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
				<li class="active">Messages</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Customer Message</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Message</div>
					<div class="panel-body">
						<div class="col-md-12">
							 <table class="table table-striped">
								    <thead>
								      <tr>
								        <th>ID</th>
								        <th>Fisrt Name</th>
								        <th>Last Name</th>
								         <th>Email</th>
								          <th>Phone Number</th>
								           
								            <th>Message</th>
								            <th>Remove</th>
								      </tr>
								    </thead>
								    <tbody>
								    	<?php

                                       include('dbconnection.php');
                                       $query=mysqli_query($con,"select * from contact_us");
                                         $rows = mysqli_num_rows($query);
                                         echo "Total Messages Are " . $rows . "  in Contect Box .";
                                       while($row=mysqli_fetch_array($query)){

                                       	$id=$row['id'];
                                       	$firstname=$row['firstname'];
                                       	$lastname=$row['lastname'];
                                       	$email=$row['email'];
                                       	$phone=$row['phone'];
                                       	$Messages=$row['message'];
                                       
								    	?>
								      <tr>
								        <td><?php echo $id; ?></td>
								        <td><?php echo $row['firstname']; ?> </td>
								      <td> <?php echo $row['lastname']; ?></td>
								            <td><?php echo $email; ?></td>
								             <td><?php echo $phone; ?></td>
								              <td><?php echo $Messages; ?></td>
								              
								                <th><a href="Messages_delete.php?del=<?php echo $id; ?>" class="btn btn-sm btn-info"> Remove</a></th>
								      </tr>
								  <?php }  ?>
								     
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