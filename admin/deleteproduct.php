<?php
	include("dbconfig.php");
	$proid=$_GET['pid'];
	$sql = "delete from product where pid ='$proid'";
	$status = mysqli_query($conn,$sql);
	if($status==true)
	{
		//echo "Data Deleted Successfully";
		header("Location:productlist.php");
	}
	else{
		mysqli_error();
	}

?>