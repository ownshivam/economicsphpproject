<?php
	include("header.php");
?>
	<?php
		// Database Connection
		include("dbconfig.php");
		//Fetch Value Of Text Boxes With Help Of Name Given To Them
		
		$fname= $_POST['fname'];
		$email= $_POST['email'];
		$tel= $_POST['tel'];
		$city= $_POST['city'];
		$dob= implode('/',$_POST['dob']);
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$hobby = implode(',',$_POST['hobby']);
		$profilepic = $_FILES['profile']['name'];
		
		//move profile image to images/profiles folder
		move_uploaded_file($_FILES['profile']['tmp_name'], 'images/profiles/'.$profilepic);
		
		//$Conn = mysqli_connect("hostname", "uname", "city", "dbname");
	
		$sql= "insert into reg(fname, email, tel, city, dob, address,  gender, hobby, profileimg)
					values('$fname', '$email', '$tel', '$city', '$dob', '$address', '$gender', '$hobby', '$profilepic')";
					
		$status = mysqli_query($conn,$sql);
		if($status==true)
		{
			//echo "1";
			header("Location:signuplist.php");
			
		}else
		{
			mysqli_error();
		}
	?>


<?php
	include("footer.php");
?>