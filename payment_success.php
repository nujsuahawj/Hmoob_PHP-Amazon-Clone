<?php
	session_start();
	include('dbconnect.php');
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}

	 $uid= $_SESSION['I'];
	// $uid=$_SESSION['uid'];
	$sql="SELECT * FROM customer_order  WHERE tr_id='$uid' order by tr_id";
	$run_query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run_query);
	$trid=$row['tr_id'];
	$uid=$row['uid'];
    $p_price=$row['p_price'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="admin/product_images/1.jpg" alt="" width="30" height="30" class="img-circle"> Hello, <?php echo $_SESSION['uname']; ?></a>
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
	
	<br>
<br><br><br><br><br>
	
	<div class='container'>
	   <h1>Place Your Order </h1>
	   <hr>
	<div class="col-md-8 m-auto">
     <form method="post" action="paytm/PaytmKit/pgRedirect.php">
		
					<td>1</td>
					<div class="form-group">
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  $_SESSION['I'];?>">
					</td>
				</div>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" class="form-control"  tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID"  class="form-control" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID"  class="form-control" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT"  class="form-control" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $p_price; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<br>
					<td><input value="CheckOut" class="btn btn-success" type="submit"	onclick=""></td>
				</tr>
		 <br>
		
	</form>


   
 </div>

		
	

	<!-- Footer -->
<footer class="page-footer font-small blue pt-4"  style="background-color: #EAEDED  ">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>

           <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_wechat"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="contect/index.php">contect us</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/">vivek65k@gmail.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
		<script src="//geodata.solutions/includes/countrystatecity.js"></script>
</body>
</html>