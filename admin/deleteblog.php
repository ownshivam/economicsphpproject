<?php
include("header.php")
?>

<?php
	
	//establish connection
	include("dbconfig.php");
	
	//get the value of id which is pass in the urldecode
	// and store into the variable
	$blogid=$_GET['bid'];
	
	//write the delete query and store in $sql var.
	$sql="delete from blog where bid='$blogid'";
	
	$status=mysqli_query($conn,$sql);
		if($status==true)
		{
			//echo "data delete successfully";
			header("Location:bloglist.php");
		}
			else{
				mysqli_error();
			}
	
?>