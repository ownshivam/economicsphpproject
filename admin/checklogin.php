
	<?php
		session_start(); //session started
		//establish the connection
		include("dbconfig.php");
		
		$name = $_POST['uname'];
		$pass = $_POST['password'];
		
		//write the query to fetch a record where email='$name' and password = '$pass'
		
		$sql = "select * from admindetails where email='$name' and password ='$pass'";
		
		//execute the query
		
		$res=mysqli_query($conn,$sql);
		
		//counting the records whose email and password is equal to the value given in textbox
		$total=mysqli_num_rows($res);
		
		//if records exists than only fetch the record
		if($total>0)
		{
			$row=mysqli_fetch_object($res);
			
			//passing the values from table to session variables id,name
			$_SESSION['id']=$row->id;
			$_SESSION['name']=$row->name;
			
			header("Location:home.php");
		}else{
			header("Location:index.php");
		}
	?>