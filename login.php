<?php
if(isset($_POST["submit"]))
{
    require("connect.php");
    $sql = mysqli_query($con,"select * from register where mobileno='".$_POST['mobile']."' and password='".$_POST['password']."'");
    if(mysqli_num_rows($sql)>0)
    {
    	$row=mysqli_fetch_array($sql);
        {
            session_start();
            $_SESSION["userid"]=$row["id"];
            header("location:index.php");
        }
    }
    else
    {
    	echo "<script>alert('you enter wrong username/password')</script>";
    }
}
?>
<?php
$title = "Login";
include("Common/header.php");
?>
<div class="row">
    <br/><br />
            
    <h2 style="font-family:Times new Roman; text-align:center;">Login</h2>
    <br /><br />
    <div class="container">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">
                        Login
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <div class="form-horizontal">
                        	<div class="form-group">
                                <label class="control-label col-md-3">Mobile No</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="mobile" placeholder="Enter your Mobile no" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" placeholder="Enter your Password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-3">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require("Common/footer.php");
?>