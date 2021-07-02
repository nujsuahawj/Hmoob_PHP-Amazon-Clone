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
				<li class="active">Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Product</h1>
			</div>
		</div><!--/.row-->
    

 <div style="float: right" ><a href="add_product.php" class="btn btn-lg btn-primary"><b>Add Product</b></a></div><br><br><br>
    <div class="col-lg-13 m-auto">
    	
     <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Product Title</th>
        <th>Product Price</th>
        <th>Product Description</th>
        <th>Product Image</th>
         <th>Product Kewword</th>
          <th>Edit </th>
          <th>Delete</th>
      </tr>
    </thead>
  

    	 <?php 

           include('dbconnection.php');

            $page=$_GET['page'];
           if($page=="" || $page==1){
            $page1=0;
           }
           else{
              $page1=($page*5)-5;

           }
           $query=mysqli_query($con,"select * from products limit $page1,5 ");
           while ($row=mysqli_fetch_array($query)) {
           
          
    	  ?>
          <tbody>
      <tr>
        <td><?php echo $row['product_id']; ?></td>
        <td><?php echo $row['product_title']; ?></td>
        <td><?php echo $row['product_price']; ?></td>
        <td><?php echo $row['product_desc']; ?></td>
        <td><img src="product_images/<?php echo $row['product_image'];?>" alt="" width="100" height="100"></td>
        <td><?php echo $row['product_keywords']; ?></td>
        <td><a href="product_edit.php?edit=<?php echo $row['product_id'];  ?>" class="btn btn-sm btn-info">Edit</a></td>
        <td><a href="product_delete.php?del=<?php echo $row['product_id'];  ?>" class="btn btn-sm btn-danger">Remove</a></td>
      </tr>
       </tbody>
      <?php } ?>


   
  </table>
  
  <ul class="pagination justify-content-center" style="margin:20px 0">
      <li class="page-item disabled"><a href="#" class="page-link" >Pervious</a></li>
              <?php

       $sql=mysqli_query($con,"select * from products");
       $count=mysqli_num_rows($sql);
       $a=$count/5;
        ceil($a);
        for ($b=1; $b <=$a ; $b++) { 
          ?>
      
             
         <li class="page-item"><a class="page-link" href="product.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
          
       
          <?php 
        }
       ?>
    <li class="page-item disabled"><a href="#" class="page-link" >Next</a></li>
  </ul><br><br><br>
    </div>





 <?php 
   include('includes/footer.php');
  ?>
 