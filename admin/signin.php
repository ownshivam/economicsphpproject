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
			.bg-lightred{
				background: #f1948a;
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
			
		</style>
	</head>
	<body>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4 bg-lightred">
					<div class="row">
						<div class="col-sm-1"></div>
						<form action="reg.php" method="POST">
							<div class="col-sm-10">
								<h3 class="text-center"> User Registration </h3>
								<div class="row form-group">
									<label>Full Name</label>
									<input type="text" class="form-control" name="fname" placeholder="Enter Fullname" required>
								</div>
								<div class="row form-group">
									<label>Mobile</label>
									<input type="tel" class="form-control" name="mobile" placeholder="Enter Mobile No." required>
								</div>
								<div class="row form-group">
									<label>E-Mail Id</label>
									<input type="text" class="form-control" name="email" placeholder="Enter E-Mail Id Like abc@xyz.com" required>
								</div>
								<div class="row form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
								</div>
								
								<div class="row form-group text-center">
									<button type="submit" class="btn btn-success"> Sign Up </button>
									<button type="reset" class="btn btn-danger"> Clear </button>
								</div>
								<div class="text-center">
									<a href="index.php"><i>I have an account </i></a>
								</div>
							</div>
						</form>
						<div class="col-sm-1"></div>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
		<br>
	</body>
</html>