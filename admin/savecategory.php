<?php
	include("header.php");
?>
	<?php
		// Database Connection
		include("dbconfig.php");
		//Fetch Value Of Text Boxes With Help Of Name Given To Them
		
		$catname= $_POST['catname'];
		$brname= $_POST['brname'];
		// Write Insert Query String & Pass It To $sql Variable...
	
		
		$sql= "insert into category(catname, brname)
					values('$catname', '$brname')";
					
		//Execute the query with mysqli_query built in function which has two parameters 
		//1. Connection Object 2.Sql variable
		//where query is passed as a string...
		
		$status = mysqli_query($conn,$sql);
		if($status==true)
		{
			//echo "1";
			header("Location:categorylist.php");
			
		}else
		{
			mysqli_error();
		}

	?>
	
<?php
	include("footer.php");
?>