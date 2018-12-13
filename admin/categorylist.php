<?php
	include("header.php");
?>
	<div class="col-sm-10">
		<div class="row">
			<div class="col-sm-11">
				<div class="panel panel-default">
					<div class="panel-heading text-center"><i>Category List</i></div>
					<div class="panel-body">
						<table class="table table-bordered">	
							<tr>
								<th class="text-center bg-danger">Id</th>
								<th class="text-center bg-danger">Category Name</th>
								<th class="text-center bg-danger">Brand Name</th>
								<th colspan="3" class="text-center bg-danger">Action</th>
							</tr>
							<tr>
								<?php
									//establishing the connection//
									include("dbconfig.php");
									//write query to fetch data from table contact //
									$sql = "select * from category";
									//execute the query and store the result set in $res variable...//
									$res = mysqli_query($conn,$sql);
									
									//use whileloop for traversing with the data in table
									while($row= mysqli_fetch_object($res))
									{
										echo "<tr>";
											echo "<td class='text-center'>$row->id</td>";
											echo "<td class='text-center'>$row->catname</td>";
											echo "<td class='text-center'>$row->brname</td>";
											//echo "<td class='text-center'><button data-toggle='modal' data-target='#edituser' class='btn btn-info btn-sm'(click)='edituser(i)'><i class='fa fa-pencil' style='color:blue' aria-hidden='true'></i></button></td>";
											//echo "<td class='text-center'><button data-toggle='modal' data-target='#viewuser' class='btn btn-info btn-sm'(click)='showuser(i)'><i class='fa fa-eye' aria-hidden='true'></i></button></td>";
											echo "<td class='text-center'><a href='editcategory.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-pencil' style='color:blue' aria-hidden='true'></i></button></a></td>";
											echo "<td class='text-center'><a href='viewcategory.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-eye' style='color:green' aria-hidden='true'></i></button></a></td>";
											echo "<td class='text-center'><a href='deletecategory.php?id=$row->id'><button class='btn btn-warning btn-sm'><i class='fa fa-trash-o' style='color:red' aria-hidden='true'></i></button></a></td>";
										echo"</tr>";
									}
								?>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-1">
				<a href="addcategory.php"><button type="button" class="btn btn-warning btn-md">Add Category</button></a>
			</div>
		</div>
		<!--View Modal -->
		<div class="modal fade" id="viewuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-center" id="myModalLabel">View Category List Details</h4>
					</div>
					<div class="modal-body">
						<div [innerHTML]="userdata"></div>  
						<table class="table table-bordered">
							<tr>
								<th class="text-center bg-danger">Id</th>
								<th class="text-center bg-danger">Category Name</th>
								<th class="text-center bg-danger">Brand Name</th>
							</tr>
							<tr>
								<?php
									//write query to fetch data from table contact //
									$sql = "select * from category";
									//execute the query and store the result set in $res variable...//
									$conn = mysqli_connect("localhost", "root", "", "product");
									$res = mysqli_query($conn,$sql);
									
									//use whileloop for traversing with the data in table
									while($row= mysqli_fetch_object($res))
									{
										echo "<tr>";
											echo "<td class='text-center'>$row->id</td>";
											echo "<td class='text-center'>$row->catname</td>";
											echo "<td class='text-center'>$row->brname</td>";
										echo "</tr>";
									}
								?>
							</tr>
						</table>
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
						<h4 class="modal-title text-center" id="myModalLabel">Edit Category List Details</h4>
					</div>
					<div class="modal-body">
						<div [innerHTML]="userdata"></div>        
					</div>
				</div>
			</div>
		</div>
		<!--Edit Modal End Here-->
	</div>
<?php
	include("footer.php");
?>