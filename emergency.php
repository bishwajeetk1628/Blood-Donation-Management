<?php
$title = "Emergency";
	require("Common/header.php");
	require("connect.php");
?>     
<div class="row">
        <br /><br />
            
            <h2 style="font-family:Times New Roman; text-align:center;">Search Hospitals Where Blood Available</h2>
            <br /><br />
            <div class="container">
               <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Emergency
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Blood Group</label>
                                        <div class="col-md-8">
                                            <select name="bloodg" class="form-control">
                                            	<option value="">Select Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="O+">O+</option>
                                                <option value="B+">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="O-">O-</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>
                                     </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3">State</label>
                                        <div class="col-md-8">
	                                        <select name="state" id="state" class="form-control">
									            <option selected disabled>Please select state</option>
									            <?php
									                $state = "select * from states";

									                $result = mysqli_query($con,$state);

									                if($result)
									                {
									                    foreach ($result as $row)
									                    {
									                        echo '<option value="'.$row["state_id"].'">'.$row["state_name"].'</option>';
									                    }
									                }
									                else
									                {
									                    echo "query not execute";
									                }
									            ?>
									        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">City</label>
                                        <div class="col-md-8">
	                                        <select name="city" id="city" class="form-control">
									            <option selected disabled>Please select state first</option>
									        </select>
									    </div>
									</div>
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br /><br />
               </div>

               <br /><br />
	<div class="col-md-10 col-md-offset-1">
	<?php
		if(isset($_POST["submit"]))
		{	
			// print_r($_POST);die;
			if(empty($_POST['bloodg']) || !isset($_POST['bloodg']))
            {
                echo "<script>alert('Please Select Blood Group')</script>";
            }
            else if(empty($_POST['state']) || !isset($_POST['state']))
            {
                echo "<script>alert('Please Select state')</script>";
            }
            else if(empty($_POST['city']) || !isset($_POST['city']))
            {
                echo "<script>alert('Please Select city')</script>";
            }
            else
            {
            	$state_id = $_POST['state'];
                $city_id = $_POST['city'];
                $bloodgroup = $_POST["bloodg"];
		    	$query = 'select s.state_name,c.city_name,h.hospital_phoneno,h.hospital_name,h.hospital_address,b.blood_group,b.unit from hospitals h 
		    		INNER JOIN states s ON s.state_id = h.hospital_state
		    		INNER JOIN cities c ON c.city_id = h.hospital_city
		    		INNER JOIN bloods_in_hospitals b ON h.id = b.hospital_id
		    		WHERE b.blood_group = "'.$bloodgroup.'" AND s.state_id = "'.$state_id.'" AND c.city_id = "'.$city_id.'"';
		    		// echo $query;die;
		        $com = mysqli_query($con,$query);
		        if(mysqli_num_rows($com)>0)
		        { ?>
		            <h1>Hospitals List</h1><br>
		            <table class="table table-responsive table-condensed table-bordered">

		                <tr>
		                    <td>Sr no</td>
		                    <td>Hospital Name</td>
		                    <td>Blood Group</td>
		                    <td>Unit Available</td>
		                    <td>Hospital State</td>
		                    <td>Hospital City</td>
		                    <td>Hospital Address</td>
		                    <td>Contact No.</td>
		                </tr>
		                <?php $idi = 0; while($row = mysqli_fetch_array($com))
		                {
		                    $idi++;
		                    echo ("<tr><td>$idi</td>");
		                    echo ("<td>$row[hospital_name]</td>");
		                    echo ("<td>$row[blood_group]</td>");
		                    echo ("<td>$row[unit]</td>");
		                    echo ("<td>$row[state_name]</td>");
		                    echo ("<td>$row[city_name]</td>");
		                    echo ("<td>$row[hospital_address]</td>");
		                    echo ("<td>$row[hospital_phoneno]</td></tr>");
		                }
		                echo '</table>';
		            }
		            else
		            {
		                echo "<script>alert('Blood Group is not Available in this state/city')</script>";
		            }

		        }
			}
		?> 
	    <br><br />
	</div>
</div>
 <?php require("Common/footer.php"); ?>