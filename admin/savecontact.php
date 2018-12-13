<?php
	include("header.php");
?>
	<?php
		// Database Connection
		include("dbconfig.php");
		//Fetch Value Of Text Boxes With Help Of Name Given To Them
		
		$cname= $_POST['cname'];
		$cemail= $_POST['cemail'];
		$cmob= $_POST['cmob'];
		$cmsg= $_POST['cmsg'];
		// Write Insert Query String & Pass It To $sql Variable...
	
		
		$sql= "insert into jay(cname, cemail, cmob, cmsg)
					values('$cname', '$cemail', '$cmob', '$cmsg')";
					
		//Execute the query with mysqli_query built in function which has two parameters 
		//1. Connection Object 2.Sql variable
		//where query is passed as a string...
		
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