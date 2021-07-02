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
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admins</h1>
			</div>
		</div><!--/.row-->
    

 
    <div class="col-lg-8 m-auto">
    	
     <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Fist Name</th>
        <th>Last Name</th>
        <th> Email</th>
        <th> Contect </th>
       <th>Date </th>
         <th>Remove</th>
      </tr>
    </thead>
    <tbody>
    	 <?php 

           include('dbconnection.php');
           $query=mysqli_query($con,"select * from users");
           while ($row=mysqli_fetch_array($query)) {
           
          
    	  ?>
      <tr>
         <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['fname']; ?></td>
        <td><?php echo $row['lname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['contactno']; ?></td>
        <td><?php echo $row['posting_date']; ?></td>
         <td><a href="admin_remove.php?del=<?php echo $id; ?>" class="btn btn-danger ">Remove</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
    </div>





 <?php 
   include('includes/footer.php');
  ?>
  