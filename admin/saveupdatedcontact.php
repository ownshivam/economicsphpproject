<?php
	include("header.php");
?>
	<?php
		include("dbconfig.php");
		
		$cname= $_POST['cname'];
		$cemail= $_POST['cemail'];
		$cmob= $_POST['cmob'];
		$cmsg= $_POST['cmsg'];
		$contid = $_POST['cid'];
	
		
		$sql="update jay set cname= '$cname',
							 cemail= '$cemail',
							 cmob = '$cmob',
							 cmsg = '$cmsg'
							where id ='$contid'";
		
		$status = mysqli_query($conn,$sql);
		if($status==true)
		{
			//echo "1";
			header("Location:enquirylist.php");
			
		}else
		{
			mysqli_error();
		}
	?>
	
<?php
	include("footer.php");
?>