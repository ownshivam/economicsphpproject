<html>
	<head>
		<title> Admin Panel </title>
		<link rel="stylesheet" href="../dist/css/bootstrap.css">
		<script src="../dist/js/jquery.min.js"></script>
		<script src="../dist/js/bootstrap.min.js"></script>
		<link rel ="icon" href="images/aaa.jpg">
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
		<?php
			session_start();
			if(empty($_SESSION['name']))
			{
				header("Location:index.php");
			}
		?>
	</head>
	<body>
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 alert alert-info ">
					<div class="row">
						<div class="col-sm-4">
							<h3 class="text-center"> Dashboard </h3>
						</div>
						<div class="col-sm-5"></div>
						<div class="col-sm-3 text-center">
							<h3> Welcome <br>   <?php echo $_SESSION['name'];?>
							<a href="logout.php"><button type="button" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i></button></a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="panel-title text-center">
								<i class="fa fa-cog" aria-hidden="true"></i> &nbsp; Settings
							</div>
						</div>
						<div class="panel-body text-center">
							<ul class="nav nav-tabs nav-stacked">
								<li><a href="addenquiry.php">Add Contact/Enquiry</a></li>
								<li><a href="enquirylist.php">Enquiry List</a></li>
								<li><a href="register.php">Add Customer</a></li>
								<li><a href="signuplist.php">Sign Up List</a></li>
								<li><a href="addproduct.php">Add Product </a></li>
								<li><a href="productlist.php">Product List </a></li>
								<li><a href="addcategory.php">Add Category </a></li>
								<li><a href="categorylist.php">Category List </a></li>
								<li><a href="addblogs.php">Add Blogs </a></li>
								<li><a href="bloglist.php"> Blogs List </a></li>
							</ul>
						</div>
					</div><!--panel complete-->
				</div><!--3 ends-->