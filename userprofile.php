<?php
$title = "Profile";
include('Common/header.php');
require("connect.php");
    $query = "select * from register where id='".$_SESSION['userid']."'";
    $sql = mysqli_query($con,$query);
    if(mysqli_num_rows($sql) == 1)
    {
    	$row=mysqli_fetch_array($sql);
        {
            $name=$row['name'];
	        $email=$row['email'];
	        $age=$row['age'];
	        $bloodg=$row['bloodgroup'];
	        $gender=$row['gender'];
	        $mobile=$row['mobileno'];
	        $area=$row['address'];
	        $city=$row['city'];
	        $state=$row['state'];
	        $status=$row['status'];
	        $password=$row['password'];
            $interested = $row['is_donated'];
        }
        // echo "<pre>";print_r($row);die;
        $state_query = 'select * from states';

    }
    if(isset($_POST['submit']))
    {
    	$sql = mysqli_query($con,"update register set name='".$_POST['name']."',email='".$_POST['email']."',age='".$_POST['age']."',bloodgroup='".$_POST['bloodg']."',gender='".$_POST['gender']."',mobileno='".$_POST['mobile']."',address='".$_POST['area']."',city='".$_POST['city']."',state='".$_POST['state']."',status='".$_POST['status']."',password='".$_POST['password']."',is_donated = '".$_POST['is_donated']."' where id='".$_SESSION['userid']."' ");
        header('location:userprofile.php');
    }
?>
 <div class="row">
        <br /><br />
            
            <h2 style="font-family:Times New Roman; text-align:center;">Welcome : <?php echo @$name ?></h2>
            <br /><br />
            <div class="container">
               <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                User Profile
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                    	<label class="control-label col-md-3">Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="<?php echo @$name ?>" name="name" placeholder="Enter your name" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" value="<?php echo @$email ?>" name="email" placeholder="Enter your Email" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    
                                        <label class="control-label col-md-3">Age</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" value="<?php echo @$age ?>" name="age" placeholder="Enter your Age" required="required" />
                                        </div>
                                     </div>
                                     <div class="form-group">
                                    
                                        <label class="control-label col-md-3">Blood Group</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="<?php echo @$bloodg ?>" name="bloodg" placeholder="Enter your Blood Group" required="required" />
                                        </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="control-label col-md-3">Gender</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="<?php echo @$gender ?>" name="gender" placeholder="Enter your Age" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3">Mobile No</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" value="<?php echo @$mobile ?>" name="mobile" placeholder="Enter your Mobile no" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">State</label>
                                        <div class="col-md-8">
                                            <select name="state" id="state" class="form-control">
                                                <?php
                                                    
                                                    $result = mysqli_query($con,$state_query);

                                                    if($result)
                                                    {
                                                        foreach ($result as $row)
                                                        {
                                                            if($row['state_id'] == $state)
                                                            {
                                                                echo '<option value="'.$row["state_id"].'" selected>'.$row["state_name"].'</option>';
                                                            }
                                                            else
                                                            {
                                                                echo '<option value="'.$row["state_id"].'">'.$row["state_name"].'</option>';
                                                            }
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
                                                <?php $run = mysqli_query($con,'select * from cities where city_id="'.$city.'"');

                                                    if(mysqli_num_rows($run) == 1)
                                                    {
                                                        $row = mysqli_fetch_assoc($run);
                                                        echo '<option value="'.@$city.'" selected>'.$row["city_name"].'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                         <label class="control-label col-md-3">Address</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="<?php echo @$area ?>" name="area" placeholder="Enter your Address" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3">Status</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="<?php echo @$status ?>" name="status" placeholder="Enter your Status (Married/Unmarried)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Password</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="<?php echo @$password ?>" name="password" placeholder="Enter your Password" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3">Interested</label>
                                        <div class="col-md-8">
                                            <select name="is_donated" class="form-control">
                                                <?php 
                                                    if(@$interested)
                                                    {
                                                        echo '<option value="1">Yes</option>';
                                                        echo '<option value="0">No</option>';
                                                    }
                                                    else
                                                    {
                                                        echo '<option value="0">No</option>';
                                                        echo '<option value="1">Yes</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br /><br />
               </div>
               <br /><br />
            </div>
    </div>
<?php
include('Common/footer.php');
?>