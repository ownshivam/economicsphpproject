<?php
	include("header.php");
?>
<?php
	include("dbconfig.php");
	$bid = $_GET['bid'];
	$sql= "select * from blog where bid='$bid'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_object($res);
?>

		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Add Blogs</i></div>
						<div class="panel-body">
							<form action="saveupdatedblog.php" method="Post" class="form-horizontal" enctype="multipart/form-data">
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Title Name</label>
									</div>
									<div class="col-sm-6"> 
										<input type="text" placeholder="Enter Title Name" class="form-control" name="bname" value="<?php echo $row->name; ?>">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Blog Description</label>
									</div>
									<div class="col-sm-6"> 
										<textarea class="form-control" name="bdesc" placeholder="Enter Blog Description"><?php echo $row->description; ?></textarea>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Previous Blog Picture</label>
									</div>
									<div class="col-sm-6">
										<img src="images/profiles/<?php echo $row->image; ?>" height="100px" width="100px">
										<input type="text" value="<?php echo $row->image; ?>" readonly class="form-control" name="preimg">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-6 text-center">
										<label>Id</label>
									</div>
									<div class="col-sm-6">
										<input type="text" value="<?php echo $row->bid; ?>" readonly class="form-control" name="bid">
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
											<option value="Education" <?php if($row->category=="Education") echo'selected';?>>Education</option>
											<option value="Money" <?php if($row->category=="Money") echo'selected';?>>Money</option>
											<option value="Cm" <?php if($row->category=="Cm") echo'selected';?>>CM</option>
											<option value="Pm" <?php if($row->category=="Pm") echo'selected';?>>PM</option>
										</select>
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
	