<?php
	//establish connection//
	include("dbconfig.php");
	
	//get the value of id which is passed in the url
	//and store it into variable
	$id=$_GET['id'];
	
	//write the delete query and store it in $sql variable
	$sql = "delete from reg where id ='$id'";
	
	//execute the query
	
	$status = mysqli_query($conn,$sql);
		if($status==true)
		{
			//echo "Data Deleted Successfully";
			header("Location:signuplist.php");
		}
		else{
			mysqli_error();
		}

?>