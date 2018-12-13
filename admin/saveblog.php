<?php

	include("dbconfig.php");
	
	$blogname=$_POST['bname'];
	$blogdesc=$_POST['bdesc'];
	$blogcat=$_POST['bcat'];
	
	// store the name of file which is upload in a variable called $proimg
	//we use $_FILES[][] in which first bracket contains the name of form control
	// i.e pimage and second bracket contains what does actually want to fetch,
	//here we want to fetch the name of file , so in second [name] 
	//in case if u want to type thenuse type
	$blogimage=$_FILES['bimage']['name'];
	//echo $proimg;
	
	// move upload into folder
	
	move_uploaded_file($_FILES['bimage']['tmp_name'],'images/'.$blogimg);
	
	//write the insert query
	//echo die;//
	
	$sql="insert into blog(name,description,image,category)
	values('$blogname','$blogdesc','$blogimage','$blogcat')";
	
	//execute the query
	$status=mysqli_query($conn,$sql);
	if($status==true)
	{
		//echo"data saved successfully";
		
		//for product list
		header("Location:bloglist.php");
	}
	else{
		mysqli_error();
	}
	
?>