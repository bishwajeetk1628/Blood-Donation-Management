<?php
$title="Registration";
require("connect.php");
if(isset($_POST["submit"]))
{   
            // echo "hello";
        $query = "insert into register(name,sex,mobile,state,city,password) values('".$_POST['name']."','".$_POST['sex']."','".$_POST['mobile']."','".$_POST['state']."','".$_POST['city']."','".$_POST['password']."')";
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
?>