<?php
	include("header.php");
?>
	
	<?php
		include("dbconfig.php");
		
		$proname = $_POST['pname'];
		$proprice = $_POST['pprice'];
		$proqty = $_POST['pqty'];
		$prodesc = $_POST['pdesc'];
		$preimg = $_POST['preimg'];
		$proimg = $_FILES['pimage']['name'];
		$proid = $_POST['pid'];
		
		
		if($proimg=="")
		{
			$proimg=$preimg;
		}
	
		move_uploaded_file($_FILES['pimage']['tmp_name'], 'images/'.$proimg);
		
		$sql="update product set 	name='$proname',
									price='$proprice',
									quantity='$proqty',
									description='$prodesc',
									image='$proimg'
									where pid ='$proid'";
										
		//execute query
		
		$sts=mysqli_query($conn,$sql);
		
		if($sts==true)
		{
			header("location:productlist.php");
		}
		else
		{
			mysqli_error();
		}
	?>									 
	
<?php
	include("footer.php");
?>