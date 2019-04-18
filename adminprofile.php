<?php
$title = "Profile";
include('Common/header.php');
require("connect.php");
    $query = "select * from admin where id='".$_SESSION['userid']."'";
    $sql = mysqli_query($con,$query);
    if(mysqli_num_rows($sql) == 1)
    {
    	$contact_query='select * from contact'; 

    }

?>
 <h2 style="font-family:Times New Roman; text-align:center;">WELCOME MY CREATOR</h2>