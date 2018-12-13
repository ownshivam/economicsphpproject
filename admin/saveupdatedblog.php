<?php
	include("header.php");
?>
	<?php

		include("dbconfig.php");
		
		$blogname=$_POST['bname'];
		$blogdesc=$_POST['bdesc'];
		$blogcat=$_POST['bcat'];
		$preimg = $_POST['preimg'];
		$blogimage=$_FILES['bimage']['name'];
		$bid = $_POST['bid'];
		
		if($blogimage=="")
		{
			$blogimage=$preimg;
		}
		
		
		move_uploaded_file($_FILES['bimage']['tmp_name'],'images/'.$blogimage);
		
		$sql="update blog set 	name='$blogname',
								description='$blogdesc',
								image='$blogimage',
								category='$blogcat'
								where bid ='$bid'";
		//execute the query
		$status=mysqli_query($conn,$sql);
		if($status==true)
		{
			//echo "data updated successfully";
			
			header("Location:bloglist.php");
		}
		else{
			mysqli_error();
		}
		
	?>

<?php
	include("footer.php");
?>