<?php
	include("header.php");
?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Add Contact</i></div>
						<div class="panel-body">
							<form action="savecontact.php" method="POST" class="form-horizontal">
								<div class="row form-group">
									<div class="col-sm-3">
										<label>Name</label>
									</div>
									<div class="col-sm-9">
										<input type="text" name="cname" class="form-control" placeholder="Enter Your Full Name">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-3">
										<label>E-Mail Id</label>
									</div>
									<div class="col-sm-9">
										<input type="eamil" name="cemail" class="form-control" placeholder="Enter Your E-Mail Id">
									</div>
								</div>
							
								<div class="row form-group">
									<div class="col-sm-3">
										<label>Mobile Number</label>
									</div>
									<div class="col-sm-9">
										<input type="tel" name="cmob" class="form-control" placeholder="Enter Your Mobile Number">
									</div>
								</div>
								
								<div class="row form-group">
									<div class="col-sm-3">
										<label>Message / Enquiry</label>
									</div>
									<div class="col-sm-9">
										<textarea class="form-control" name="cmsg" placeholder="Enter Your Message Here"></textarea>
									</div>
								</div>
								
								<div class="row form-group text-center">
									<button type="submit" class="btn btn-info">Save Product</button>
									<button type="reset" class="btn btn-danger">Clear Field</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="enquirylist.php"><button type="button" class="btn btn-warning btn-md">Enquiry List</button></a>
				</div>
			</div>
		</div>
	</div>

<?php
	include("footer.php");
?>