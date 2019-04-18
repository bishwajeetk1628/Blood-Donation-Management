<?php
	$con=mysqli_connect("localhost","root","","bloodbank");
	if(!$con)
	{
		echo mysqli_error($con);
	}
?>