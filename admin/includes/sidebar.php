	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['name'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="welcome.php" class="active"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em>Customer Orders</a></li>
			<li><a href="contect_u.php"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="<?php if($page=='product'){ echo "active";} ?>" href="product.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Product
					</a></li>
					<li><a class="" href="brand.php">
						<span class="fa fa-arrow-right">&nbsp;</span>Brand
					</a></li>
					<li><a class="" href="categories.php">
						<span class="fa fa-arrow-right">&nbsp;</span>  Categories
					</a></li>
					<li><a class="" href="Payment.php">
						<span class="fa fa-arrow-right">&nbsp;</span>  Payment Recive
					</a></li>
				</ul>
			</li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		