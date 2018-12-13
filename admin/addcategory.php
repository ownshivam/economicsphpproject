<?php
	include("header.php");
?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Add Category</i></div>
						<div class="panel-body">
							<form action="savecategory.php" method="POST">
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Category Name</label>
									</div>
									<div class="col-sm-6"> 
										<input type="text" placeholder="Enter Category Name" class="form-control" name="catname">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Brand Name</label>
									</div>
									<div class="col-sm-6"> 
										<input type="text" placeholder="Enter Brand Name" class="form-control" name="brname">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 text-center">
										<button  type="submit" class="btn btn-success"><i>Save</i></button>
										<button  type="reset" class="btn btn-danger"><i>Clear</i></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="categorylist.php"><button type="button" class="btn btn-warning btn-md">Category List</button></a>
				</div>
			</div>
		</div>
	</div>

<?php
	include("footer.php");
?>
	