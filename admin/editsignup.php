<?php
	include("header.php");
?>
<?php
	include("dbconfig.php");
	$rid = $_GET['id'];
	$sql= "select * from reg where id='$rid'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_object($res);
?>


		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<form action="saveupdatedsignup.php" method="POST" enctype="multipart/form-data">
						<div class="panel panel-default">
							<div class="panel-heading text-center"><i>Update Registration Details</i></div>
							<div class="panel-body">
								<div class="row form-group">
									<div class="col-sm-2">
										<label> Name </label>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Enter Your Full Name" class="form-control" name="fname" value="<?php echo $row->fname; ?>">
									</div>
									<div class="col-sm-2">
										<label> E-Mail Id </label>
									</div>
									<div class="col-sm-4"> 
										<input type="email" placeholder="Enter Your E-Mail Id" class="form-control" name="email" value="<?php echo $row->email; ?>">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Phone&nbsp;&nbsp;</label>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Enter Your Mobile Number" class="form-control" name="tel" value="<?php echo $row->tel; ?>">
									</div>
									<div class="col-sm-2">
										<label>City</label>
									</div>
									<div class="col-sm-4"> 
										<select class="form-control" name="city">
											<option value="">Choose Your City</option>
											<option value="Allahabad" <?php if($row->city=="Allahabad") echo'selected';?> >Allahabad</option>
											<option value="Bangalore" <?php if($row->city=="Bangalore") echo'selected';?>>Bangalore</option>
											<option value="Chennai" <?php if($row->city=="Chennai") echo'selected';?>>Chennai</option>
										</select>
									</div>
								</div>
								<?php
									$dob1=explode('/',$row->dob);
									//print_r($dob1);
								?>
								<div class="row form-group">
									<div class="col-sm-2"><label>D.O.B.</label></div>
									<div class="col-sm-3">
										<select class="form-control" name="dob[]" >
											<option value="">Date</option>
											<option value="05" <?php if(in_array('05',$dob1)) echo 'selected';?>>05</option>
											<option value="10" <?php if(in_array('10',$dob1)) echo 'selected';?>>10</option>
											<option value="15" <?php if(in_array('15',$dob1)) echo 'selected';?>>15</option>
											<option value="20" <?php if(in_array('20',$dob1)) echo 'selected';?>>20</option>
										</select>
									</div>
									<div class="col-sm-3">
										<select class="form-control" name="dob[]">
											<option value="0">Month</option>
											<option value="Jan" <?php if(in_array('Jan',$dob1)) echo 'selected';?>>January</option>
											<option value="Feb" <?php if(in_array('Feb',$dob1)) echo 'selected';?>>February</option>
											<option value="Mar" <?php if(in_array('Mar',$dob1)) echo 'selected';?>>March</option>
											<option value="Apr" <?php if(in_array('Apr',$dob1)) echo 'selected';?>>April</option>
											<option value="May" <?php if(in_array('May',$dob1)) echo 'selected';?>>May</option>
											<option value="Jun" <?php if(in_array('Jun',$dob1)) echo 'selected';?>>June</option>
											<option value="Jul" <?php if(in_array('Jul',$dob1)) echo 'selected';?>>July</option>
											<option value="Aug" <?php if(in_array('Aug',$dob1)) echo 'selected';?>>August</option>
											<option value="Sept" <?php if(in_array('Sept',$dob1)) echo 'selected';?>>September</option>
											<option value="Oct" <?php if(in_array('Oct',$dob1)) echo 'selected';?>>October</option>
											<option value="Nov" <?php if(in_array('Nov',$dob1)) echo 'selected';?>>November</option>
											<option value="Dec" <?php if(in_array('Dec',$dob1)) echo 'selected';?>>December</option>
										</select>
									</div>
									<div class="col-sm-3">
										<select class="form-control" name="dob[]">
											<option>Year</option>
											<option value="2000" <?php if(in_array('2000',$dob1)) echo 'selected';?>>2000</option>
											<option value="2015 "<?php if(in_array('2015',$dob1)) echo 'selected';?>>2015</option>
											<option value="2030" <?php if(in_array('2030',$dob1)) echo 'selected';?>>2030</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2">
										<label>Address</label>
									</div>
									<div class="col-sm-10">
										<textarea name="address" class="form-control" placeholder="Enter Your Address Here"><?php echo $row->address; ?></textarea>
									</div>
								</div>
								</br>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Gender</label>
									</div>
									<div class="col-sm-10">
										<input type="radio" name="gender" value="Male" <?php if($row->gender=="Male") echo'checked';?>>&nbsp;Male&nbsp;
										<input type="radio" name="gender" value="Female" <?php if($row->gender=="Female") echo'checked';?>>&nbsp;Female&nbsp;
									</div>
								</div>
								<?php
									$hobby1=explode(',',$row->hobby);
									//print_r($hobby1);
								?>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Hobbies</label>
									</div>
									<div class="col-sm-10">
										<input type="checkbox" name="hobby[]" value="Reading" <?php if(in_array('Reading',$hobby1)) echo'checked';?>>&nbsp;Reading&nbsp;
										<input type="checkbox" name="hobby[]" value="Singing" <?php if(in_array('Singing',$hobby1)) echo'checked';?>>&nbsp;Singing&nbsp;
										<input type="checkbox" name="hobby[]" value="Writing" <?php if(in_array('Writing',$hobby1)) echo'checked';?>>&nbsp;Writing&nbsp;
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Previous Profile Picture</label>
									</div>
									<div class="col-sm-10">
										<img src="images/profiles/<?php echo $row->profileimg; ?>" height="100px" width="100px">
										<input type="text" value="<?php echo $row->profileimg ?>" readonly class="form-control" name="preimg">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-2">
										<label>Id</label>
									</div>
									<div class="col-sm-10">
										<input type="text" value="<?php echo $row->id; ?>" readonly class="form-control" name="rid">
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
										<button  type="submit" class="btn btn-success"><i>Update</i></button>
										<button  type="reset" class="btn btn-danger"><i>Clear</i></button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	include("footer.php");
?>
	