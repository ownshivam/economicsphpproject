<?php
	include("header.php");
?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<form action="reg.php" method="POST" enctype="multipart/form-data">
						<div class="panel panel-default">
							<div class="panel-heading text-center"><i>Registration Details</i></div>
							<div class="panel-body">
							
								<div class="row form-group">
									<div class="col-sm-2">
										<label> Name </label>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Enter Your Full Name" class="form-control" name="fname">
									</div>
									<div class="col-sm-2">
										<label> E-Mail Id </label>
									</div>
									<div class="col-sm-4"> 
										<input type="email" placeholder="Enter Your E-Mail Id" class="form-control" name="email">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Phone&nbsp;&nbsp;</label>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Enter Your Mobile Number" class="form-control" name="tel">
									</div>
									<div class="col-sm-2">
										<label>City</label>
									</div>
									<div class="col-sm-4"> 
										<select class="form-control" name="city">
											<option value="">Choose Your City</option>
											<option value="Allahabad">Allahabad</option>
											<option value="Bangalore">Bangalore</option>
											<option value="Chennai">Chennai</option>
										</select>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-2"><label>D.O.B.</label></div>
									<div class="col-sm-3">
										<select class="form-control" name="dob[]">
											<option>Date</option>
											<option>05</option>
											<option>10</option>
											<option>15</option>
											<option>20</option>
										</select>
									</div>
									<div class="col-sm-3">
										<select class="form-control" name="dob[]">
											<option value="0">Month</option>
											<option value="Jan">January</option>
											<option value="Feb">February</option>
											<option value="Mar">March</option>
											<option value="Apr">April</option>
											<option value="Jun">June</option>
											<option value="Jan">July</option>
											<option value="Aug">August</option>
											<option value="Sept">September</option>
											<option value="Oct">October</option>
											<option value="Nov">November</option>
											<option value="Dec">December</option>
										</select>
									</div>
									<div class="col-sm-3">
										<select class="form-control" name="dob[]">
											<option>Year</option>
											<option>2000</option>
											<option>2015</option>
											<option>2030</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2">
										<label>Address</label>
									</div>
									<div class="col-sm-10">
										<textarea name="address" class="form-control" placeholder="Enter Your Address Here"></textarea>
									</div>
								</div>
								</br>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Gender</label>
									</div>
									<div class="col-sm-10">
										<input type="radio" name="gender" value="Male">&nbsp;Male&nbsp;
										<input type="radio" name="gender" value="Female">&nbsp;Female&nbsp;
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Hobbies</label>
									</div>
									<div class="col-sm-10">
										<input type="checkbox" name="hobby[]" value="Reading">&nbsp;Reading&nbsp;
										<input type="checkbox" name="hobby[]" value="Singing">&nbsp;Singing&nbsp;
										<input type="checkbox" name="hobby[]" value="Writing">&nbsp;Writing&nbsp;
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Profile Picture</label>
									</div>
									<div class="col-sm-10">
										<input type="file" name="profile">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 text-center">
										<button  type="submit" class="btn btn-success"><i>Save</i></button>
										<button  type="reset" class="btn btn-danger"><i>Clear</i></button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-1">
					<a href="signuplist.php"><button type="button" class="btn btn-warning btn-md">Registration List</button></a>
				</div>
			</div>
		</div>
	</div>

<?php
	include("footer.php");
?>
	