<?php
	include("header.php");
?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Enquiry List</i></div>
						<div class="panel-body">
							<table class="table table-bordered">
								<tr>
									<th class="text-center bg-danger">Id</th>
									<th class="text-center bg-danger">Full Name</th>
									<th class="text-center bg-danger">E-Mail Id</th>
									<th class="text-center bg-danger">Mobile Number</th>
									<th class="text-center bg-danger">Message</th>
									<th colspan="3" class="text-center bg-danger">Action</th>
								</tr>
								<tr>
									<?php
										//establishing the connection//
										include("dbconfig.php");
										//write query to fetch data from table contact //
										$sql = "select * from jay";
										//execute the query and store the result set in $res variable...//
										$res = mysqli_query($conn,$sql);
										
										//use whileloop for traversing with the data in table
										while($row= mysqli_fetch_object($res))
										{
											echo "<tr>";
												echo "<td class='text-center'>$row->id</td>";
												echo "<td class='text-center'>$row->cname</td>";
												echo "<td class='text-center'>$row->cemail</td>";
												echo "<td class='text-center'>$row->cmob</td>";
												echo "<td class='text-center'>$row->cmsg</td>";
												//echo "<td class='text-center'><button data-toggle='modal' data-target='#edituser' class='btn btn-info btn-sm'(click)='edituser(i)'><i class='fa fa-pencil' style='color:blue' aria-hidden='true'></i></button></td>";
												//echo "<td class='text-center'><button data-toggle='modal' data-target='#viewuser' class='btn btn-info btn-sm'(click)='showuser(i)'><i class='fa fa-eye' aria-hidden='true'></i></button></td>";
												echo "<td class='text-center'><a href='editenquiry.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-pencil' style='color:blue' aria-hidden='true'></i></button></a></td>";
												echo "<td class='text-center'><a href='viewenquiry.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-eye' style='color:green' aria-hidden='true'></i></button></a></td>";
												echo "<td class='text-center'><a href='deleteenquiry.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-trash-o' style='color:red' aria-hidden='true'></i></button></a></td>";
											echo"</tr>";
										}
									?>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="addenquiry.php"><button type="button" class="btn btn-warning btn-md">Add Enquiry</button></a>
				</div>
			</div>
		</div>
	</div>

<?php
	include("footer.php");
?>