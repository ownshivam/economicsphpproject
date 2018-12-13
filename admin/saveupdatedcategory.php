<?php
	include("header.php");
?>
	<?php
		include("dbconfig.php");
		
		$catname= $_POST['catname'];
		$brname= $_POST['brname'];
		$catid = $_POST['cid'];
		
		$sql="update category set catname = '$catname',
								brname = '$brname'
								where id ='$catid'";
		
		$status = mysqli_query($conn,$sql);
		if($status==true)
		{
			// echo "1";
			header("Location:categorylist.php");
			
		}else
		{
			mysqli_error();
		}

	?>
	
<?php
	include("footer.php");
?>
?>