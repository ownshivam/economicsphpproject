<html>
	<head>
		<head>
		<title>Project</title>
		<link rel="stylesheet" href="../dist/css/bootstrap.css">
		<script src="../dist/js/jquery.min.js"></script>
		<script src="../dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
		<link rel="icon" href="images/images.png">
		<style>
			.bg-orange{
				background:orange;
				border-radius:10px;
				border: 5px solid black;
			}
			.btn-success{
				border-radius:0px;
				width:95px;
			}
			.btn-danger{
				border-radius:0px;
				width:95px;
			}
			
			.right{
				float:right;
				padding-right:20px;
			}
			#clear{
				clear:both;
			}
		</style>
	</head>
	<body>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4 bg-orange">
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10">
							<h3 class="text-center"> User Log In </h3>
							<form action="checklogin.php" method="POST">
								<div class="row form-group">
									<label>User Name / E-Mail Id</label>
									<input type="text" class="form-control" name="uname" placeholder="User Name / E-Mail Id Like abc@xyz.com" required>
								</div>
								<div class="row form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
								</div>
								<div class="row form-group text-center">
									<button type="submit" class="btn btn-success"> Log In </button>
									<button type="reset" class="btn btn-danger"> Clear </button>
								</div>
								<!--<div class="text-center">
									<a href="signin.php"><i>I am new user </i></a>
								</div>-->
							</form>
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
		<br>
	</body>
</html>