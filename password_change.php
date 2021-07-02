<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amaclone</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/fav.png">



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top"  id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Amaclone</a>
			</div>

			<ul class="nav navbar-nav">

				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn" name=""><span class='glyphicon glyphicon-search'></span></button></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li id='shoppingcart'><a id="carticon" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">2</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3"><strong>S. No.</strong></div>
									<div class="col-md-3"><strong>Product Image</strong></div>
									<div class="col-md-3"><strong>Product Name</strong></div>
									<div class="col-md-3"><strong>Price in $</strong></div>
								</div>
								<hr>
								<div id="cartmenu">
								<!--<div class="row">
									<div class="col-md-3">S. No.</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>-->
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="admin/product_images/1.jpg" alt="" width="30" height="30" class="img-circle">Hello, <?php echo $_SESSION['uname']; ?></a>
				<ul class="dropdown-menu">
					<li><a href="user_profile.php">Profile</a></li>
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart-large"></span> Cart</a></li>
					<li><a href="password_change.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>

				</li>

				</ul>

		</div>
	</div>
	<br><br><br><br>
	<!-- Slider Begins -->

  	  <div style="width: 70%; margin-left: 20%" >
   <center><h1>Change Your Password</h1></center>
<hr>
      <form action="password_change.php" method="post">
      	<div class="form-group">
      		<label for="Old">Current Password :</label>
      		<input type="text" name="password" class="form-control" placeholder="Enter Your Current Password">
      	</div>
         
         <div class="form-group">
      		<label for="Old">New Password :</label>
      		<input type="text" name="new_password" class="form-control" placeholder="Enter Your New Password">
      	</div>

      	<input type="submit" class="btn btn-lg btn-primary" name="submit" value="Update Password">
      </form>
</div>
<?php 
	include('dbconnect.php');
   

    if (isset($_POST['submit'])) {
    	$name=$_SESSION['uid'];
      $Current_password=$_POST['password'];
       $new_password=$_POST['new_password'];
      $password=md5($_POST['new_password']);
      if ($Current_password==$new_password) {
      	    $query=mysqli_query($conn,"update user_info set password='$new_password' where first_name='$name' ");
        
         if ($query) {
         	echo "<script>alert('password Update Successfully')</script>";
         }
      }else{
      	echo "<div class='alert alert-danger'>Password Dose Not Match</div>";
      }
    }
 ?>
<br><br><br>
        <div class="col-lg-8 m-auto">
  </div>

	<?php
  include('includes/footer.php');

	?>