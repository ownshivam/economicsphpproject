<?php
	include("header.php");
?>
	<div class="col-sm-10">
		<div class="row">
			<div class="col-sm-11">
				<div class="panel panel-default">
					<div class="panel-heading text-center"><i>Add Blogs</i></div>
					<div class="panel-body">
						<form action="saveblog.php" method="Post" class="form-horizontal" enctype="multipart/form-data">
							<div class="row form-group">
								<div class="col-sm-6 text-center">
									<label>Title Name</label>
								</div>
								<div class="col-sm-6"> 
									<input type="text" placeholder="Enter Title Name" class="form-control" name="bname">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-6 text-center">
									<label>Blog Description</label>
								</div>
								<div class="col-sm-6"> 
									<textarea class="form-control" name="bdesc" placeholder="Enter Blog Description"></textarea>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-6 text-center">
									<label>Blog Image</label>
								</div>
								<div class="col-sm-6"> 
									<input type="file" name="bimage">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-6 text-center">
									<label>Category</label>
								</div>
								<div class="col-sm-6"> 
									<select class="form-control" name="bcat">
										<option value="">Choose Your Category</option>
										<option value="Education">Education</option>
										<option value="Money">Money</option>
										<option value="Cm">CM</option>
										<option value="Pm">PM</option>
									</select>
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
				<a href="bloglist.php"><button type="button" class="btn btn-warning btn-md">Blog List</button></a>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>
	