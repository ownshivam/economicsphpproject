<?php
	include("header.php");
?>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-11">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><i>Enquiry List</i></div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<th class="text-center bg-danger"> Id </th>
										<th class="text-center bg-danger"> Profile Picture </th>
										<th class="text-center bg-danger"> Name </th>
										<th class="text-center bg-danger"> E-Mail Id </th>
										<th class="text-center bg-danger"> Mobile Number </th>
										<th class="text-center bg-danger"> City </th>
										<th class="text-center bg-danger"> D.O.B. </th>
										<th class="text-center bg-danger"> Address </th>
										<th class="text-center bg-danger"> Gender </th>
										<th class="text-center bg-danger"> Hobbies </th>
										<th class="text-center bg-danger" colspan="3"> Action </th>
									</tr>
									<tr>
										<?php
											// estable connection
											include("dbconfig.php");
											//to fetch data from table
											$sql="select*from reg";
											//execute & store data the res
											$res=mysqli_query($conn,$sql);
											//use whileloop for traversing with the data in table(one by one)
											
											while($row=mysqli_fetch_object($res))
											{
												
												echo"<tr>";
													echo"<td class='text-center'>$row->id</td>";
													echo "<td class='text-center'><img src='images/profiles/$row->profileimg' height='50px' width='50px' class='img-thumbnail'></td>";
													echo"<td class='text-center'>$row->fname</td>";
													echo"<td class='text-center'>$row->email</td>";
													echo"<td class='text-center'>$row->tel</td>";
													echo"<td class='text-center'>$row->city</td>";
													echo"<td class='text-center'>$row->dob</td>";
													echo"<td class='text-center'>$row->address</td>";
													echo"<td class='text-center'>$row->gender</td>";
													echo"<td class='text-center'>$row->hobby</td>";
													//echo "<td class='text-center'><button data-toggle='modal' data-target='#edituser' class='btn btn-info btn-sm'(click)='edituser(i)'><i class='fa fa-pencil' style='color:blue' aria-hidden='true'></i></button></td>";
													//echo "<td class='text-center'><button data-toggle='modal' data-target='#viewuser' class='btn btn-info btn-sm'(click)='showuser(i)'><i class='fa fa-eye' aria-hidden='true'></i></button></td>";
													echo "<td class='text-center'><a href='editsignup.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-pencil' style='color:blue' aria-hidden='true'></i></button></a></td>";
													echo "<td class='text-center'><a href='viewsignup.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-eye' style='color:green' aria-hidden='true'></i></button></a></td>";
													echo "<td class='text-center'><a href='deletesignup.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-trash-o' style='color:red' aria-hidden='true'></i></button></a></td>";
												echo"</tr>";
												
											}
										?>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="register.php"><button type="button" class="btn btn-warning btn-md">Add Customer</button></a>
				</div>
			</div>
			<!--View Modal -->
			<div class="modal fade" id="viewuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel">View Enquiry List Details</h4>
						</div>
						<div class="modal-body">
							<div [innerHTML]="userdata"></div> 
							<div class="panel-body">
								<table class="table table-bordered">
									<tr>
										<th class="text-center bg-danger"> Id </th>
										<th class="text-center bg-danger"> Name </th>
										<th class="text-center bg-danger"> E-Mail Id </th>
										<th class="text-center bg-danger"> Mobile Number </th>
										<th class="text-center bg-danger"> City </th>
										<th class="text-center bg-danger"> D.O.B. </th>
										<th class="text-center bg-danger"> Address </th>
										<th class="text-center bg-danger"> Gender </th>
										<th class="text-center bg-danger"> Hobbies </th>
									</tr>
									<tr>
										<?php
											//write query to fetch data from table contact //
											$sql = "select * from reg";
											//execute the query and store the result set in $res variable...//
											$conn = mysqli_connect("localhost", "root", "", "product");
											$res = mysqli_query($conn,$sql);
											
											//use whileloop for traversing with the data in table
											while($row= mysqli_fetch_object($res))
											{
												echo"<tr>";
													echo"<td>$row->id</td>";
													echo"<td>$row->fname</td>";
													echo"<td>$row->email</td>";
													echo"<td>$row->tel</td>";
													echo"<td>$row->city</td>";
													echo"<td>$row->dob</td>";
													echo"<td>$row->address</td>";
													echo"<td>$row->gender</td>";
													echo"<td>$row->hobby</td>";
												echo "</tr>";
											}
										?>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--View Modal End Here-->
			<!--Edit Modal -->
			<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-bg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel">Edit Product List Details</h4>
						</div>
						<div class="modal-body">
							<div [innerHTML]="userdata"></div>        
						</div>
					</div>
				</div>
			</div>
			<!--Edit Modal End Here-->
		</div>
	</div>
				
<?php
	include("footer.php");
?>
	