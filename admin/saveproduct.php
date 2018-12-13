<?php
	include("header.php");
?>
	<?php
		// Database Connection
		include("dbconfig.php");
		
		$proname = $_POST['pname'];
		$proprice = $_POST['pprice'];
		$proqty = $_POST['pqty'];
		$prodesc = $_POST['pdesc'];
		
		$proimg = $_FILES['pimage']['name'];
		
		move_uploaded_file($_FILES['pimage']['tmp_name'], 'images/'.$proimg);
		
		
		$sql = "insert into product(name, price, quantity, description, image)
		value('$proname', '$proprice', '$proqty', '$prodesc', '$proimg')";
		
		
		$status = mysqli_query($conn,$sql);
		if($status==true)
		{
			//echo "Data Saved Successfully";
			header("Location:productlist.php");
		}
		else{
			mysqli_error();
		}

	?>
	
<?php
	include("footer.php");
?>