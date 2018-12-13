<?php
	include("header.php");
?>

<?php
	include("dbconfig.php");
	$pid = $_GET['pid'];
	$sql= "select * from product where pid='$pid'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_object($res);
?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Update Product List</i></div>
						<div class="panel-body">
							<form action="saveupdatedproduct.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Name</label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="pname" class="form-control" placeholder="Enter Product Name" value="<?php echo $row->name; ?>">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Price</label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="pprice" class="form-control" placeholder="Enter Product Price" value="<?php echo $row->price; ?>">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Quantity</label>
									</div>
									<div class="col-sm-6">
										<input type="number" name="pqty" class="form-control" step="1" placeholder="Enter Product Quantity" value="<?php echo $row->quantity; ?>">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Product Description</label>
									</div>
									<div class="col-sm-6">
										<textarea class="form-control" placeholder="Enter Product Description" name="pdesc"><?php echo $row->description; ?></textarea>
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Previous Producte Image</label>
									</div>
									<div class="col-sm-6">
										<img src="images/<?php echo $row->image; ?>" height="100px" width="100px">
										<input type="text" value="<?php echo $row->image ?>" readonly class="form-control" name="preimg">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Id</label>
									</div>
									<div class="col-sm-6">
										<input type="text" value="<?php echo $row->pid; ?>" readonly class="form-control" name="pid">
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
									<button type="submit" class="btn btn-info">Update Product</button>
									<button type="reset" class="btn btn-danger">Clear Field</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
				
<?php
	include("footer.php");
?>
	