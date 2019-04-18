<?php
if(isset($_POST["submit"]))
{
    require("connect.php");
    $sql = mysqli_query($con,"select * from admin where name='".$_POST['name']."' and code='".$_POST['code']."' and password='".$_POST['password']."'");
    if(mysqli_num_rows($sql)>0)
    {
    	$row=mysqli_fetch_array($sql);
        {
            session_start();
            $_SESSION["userid"]=$row["id"];
            echo "<script>alert('Loggedin Successfully')</script>";
            header("location:index.php");
        }
    }
    else
    {
    	echo "<script>alert('You have entered wrong login details')</script>";
    }
}
?>
<?php
$title = "Admin-Login";
include("Common/header.php");
?>
<div class="row">
    <br/><br />
            
    <h2 style="font-family:Times new Roman; text-align:center;">Admin-Login</h2>
    <br /><br />
    <div class="container">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">
                        Admin-Login
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <div class="form-horizontal">
                        	<div class="form-group">
                                <label class="control-label col-md-3">Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" placeholder="Enter your Name" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Engineer code</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="code" placeholder="Enter the Engineer code" required />
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