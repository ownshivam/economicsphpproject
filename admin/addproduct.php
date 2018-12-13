<?php
	include("header.php");
?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Add Product</i></div>
						<div class="panel-body">
							<form action="saveproduct.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Name</label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="pname" class="form-control" placeholder="Enter Product Name">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Price</label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="pprice" class="form-control" placeholder="Enter Product Price">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Quantity</label>
									</div>
									<div class="col-sm-6">
										<input type="number" name="pqty" class="form-control" step="1" placeholder="Enter Product Quantity">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Description</label>
									</div>
									<div class="col-sm-6">
										<textarea class="form-control" placeholder="Enter Product Description" name="pdesc"></textarea>
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Image</label>
									</div>
									<div class="col-sm-6">
										<input type="file" name="pimage">
									</div>
								</div>
								
								<div class="form-group text-center">
									<button type="submit" class="btn btn-info">Save Product</button>
									<button type="reset" class="btn btn-danger">Clear Field</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="productlist.php"><button type="button" class="btn btn-warning btn-md">Product List</button></a>
				</div>
			</div>
		</div>
	</div>
				
<?php
	include("footer.php");
?>
	