<?php
	include("header.php");
?>
<?php
	include("dbconfig.php");
	$id = $_GET['id'];
	$sql= "select * from category where id='$id'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_object($res);
?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Update Category List</i></div>
						<div class="panel-body">
							<form action="saveupdatedcategory.php" method="POST">
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Category Name</label>
									</div>
									<div class="col-sm-6"> 
										<input type="text" placeholder="Enter Category Name" class="form-control" name="catname" value="<?php echo $row->catname; ?>">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Brand Name</label>
									</div>
									<div class="col-sm-6"> 
										<input type="text" placeholder="Enter Brand Name" class="form-control" name="brname" value="<?php echo $row->brname; ?>">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Id</label>
									</div>
									<div class="col-sm-6">
										<input type="text" value="<?php echo $row->id;?>" readonly class="form-control" name="cid">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 text-center">
										<button  type="submit" class="btn btn-success"><i>Update</i></button>
										<button  type="reset" class="btn btn-danger"><i>Clear</i></button>
									</div>
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