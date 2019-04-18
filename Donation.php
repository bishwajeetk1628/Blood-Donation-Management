<?php
$title="Registration";
require("Common/header.php");
require("connect.php");
if(isset($_POST["submit"]))
{   //echo "<pre>"; print_r($_POST);die;
    $pass=$_POST['password'];
    $copass=$_POST['pass'];
    if($pass!=$copass)
    {
            echo "<script>alert('Password does not match')</script>";
    }
    else
    {
        // echo "hello";
        $query = "insert into register(name,email,age,bloodgroup,gender,mobileno,address,city,state,status,password,is_donated) values('".$_POST['name']."','".$_POST['email']."','".$_POST['age']."','".$_POST['bloodg']."','".$_POST['gender']."','".$_POST['mobile']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['status']."','".$_POST['password']."','".$_POST['is_donated']."')";
        $var = mysqli_query($con,$query);

        // echo $var;die;
        if($var)
        {
            echo "<script>alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script>alert('Registration failed! Please try again!')</script>";
        }
    }
    
}
?>
    <div class="row">
        <br /><br />
            
            <h2 style="font-family:Times New Roman; text-align:center;">Register</h2>
            <br /><br />
            <div class="container">
               <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Register
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                    	<label class="control-label col-md-3">Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" name="email" placeholder="Enter your Email" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    
                                        <label class="control-label col-md-3">Age</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" name="age" placeholder="Enter your Age" required="required" />
                                        </div>
                                     </div>
                                     <div class="form-group">
                                    
                                        <label class="control-label col-md-3">Blood Group</label>
                                        <div class="col-md-8">
                                            <select name="bloodg" class="form-control">
                                                <option value="">Select Your Blood Group</option>
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
                                         <label class="control-label col-md-3">Gender</label>
                                        <div class="col-md-8">
                                            <label>
                                            	<input type="radio" name="gender" id="male" value="male"><label for="male"> &nbsp;Male</label>
     											<input type="radio" name="gender" value="female" id="female"><label for="female"> &nbsp;Female</label>
      											<input type="radio" name="gender" value="other" id="other"><label for="other">&nbsp; Other</label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3">Mobile No</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" name="mobile" placeholder="Enter your Mobile no" required />
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
                                         <label class="control-label col-md-3">Address</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="address" placeholder="Enter your Address" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3">Status</label>
                                        <div class="col-md-8">
                                            <select name="status" class="form-control">
                                            	<option value="">Select Status</option>
                                            	<option value="married">Married</option>
                                                <option value="unmarried">Unmarried</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" name="password" placeholder="Enter your Password" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3">Co-password</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" name="pass" placeholder="Re-Enter Password" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Interested</label>
                                        <div class="col-md-8">
                                            <select name="is_donated" class="form-control">
                                                <option value="">Donate Blood?</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
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
            </div>
    </div>
<?php
require("Common/footer.php");
?>