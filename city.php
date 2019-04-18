<?php
	if (isset($_POST['state_id'])) 
	{
		require('connect.php');
		$query="select * from cities WHERE state_id='".$_POST['state_id']."'";
		// echo $query; die;
		$result = mysqli_query($con,$query);
		if($result)
		{ 
			echo '<option value="">Select City</option>';
			foreach($result as $row)
			{
				echo "<option value='".$row['city_id']."'>".$row['city_name']."</option>";
			}
		}
	}
?>