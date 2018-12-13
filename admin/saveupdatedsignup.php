<?php
	include("header.php");
?>
	
	<?php
	include("dbconfig.php");
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$city = $_POST['city'];
	$dob = implode('/',$_POST['dob']);
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$hobby = implode(',',$_POST['hobby']);
	$preimg = $_POST['preimg'];
	$profileimg = $_FILES['profile']['name'];
	$regid = $_POST['rid'];
	
	
	if($profileimg=="")
	{
		$profileimg=$preimg;
	}
	
	move_uploaded_file($_FILES['profile']['tmp_name'],"images/profile/".$profileimg);
	
	// write the update query
	
	$sql="update reg set fname='$name',
									email='$email',
									tel='$tel',
									city='$city',
									dob='$dob',
									address='$address',
									gender='$gender',
									hobby='$hobby',
									profileimg='$profileimg'
									where id ='$regid'";
									
	//execute query
	
	$sts=mysqli_query($conn,$sql);
	
	if($sts==true)
	{
		header("location:signuplist.php");
	}
	else
	{
		mysqli_error();
	}
	?>									 
	
<?php
	include("footer.php");
?>