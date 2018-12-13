<?php
	include("header.php");
?>

	<?php
		include("dbconfig.php");
		$id = $_GET['id'];
		$sql= "select * from jay where id='$id'";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_object($res);
	?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Update Contact List</i></div>
						<div class="panel-body">
							<form action="saveupdatedcontact.php" method="POST" class="form-horizontal">
								<div class="row form-group">
									<div class="col-sm-3">
										<label>Name</label>
									</div>
									<div class="col-sm-9">
										<input type="text" name="cname" class="form-control" placeholder="Enter Your Full Name" value="<?php echo $row->cname; ?>">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-3">
										<label>E-Mail Id</label>
									</div>
									<div class="col-sm-9">
										<input type="eamil" name="cemail" class="form-control" placeholder="Enter Your E-Mail Id" value="<?php echo $row->cemail; ?>">
									</div>
								</div>
							
								<div class="row form-group">
									<div class="col-sm-3">
										<label>Mobile Number</label>
									</div>
									<div class="col-sm-9">
										<input type="tel" name="cmob" class="form-control" placeholder="Enter Your Mobile Number" value="<?php echo $row->cmob; ?>">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-3">
										<label>Message / Enquiry</label>
									</div>
									<div class="col-sm-9">
										<textarea class="form-control" name="cmsg" placeholder="Enter Your Message Here"><?php echo $row->cmsg; ?></textarea>
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-3">
										<label>Id</label>
									</div>
									<div class="col-sm-9">
										<input type="text" value="<?php echo $row->id;?>" readonly class="form-control" name="cid">
									</div>
								</div>
								
								<div class="row form-group text-center">
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