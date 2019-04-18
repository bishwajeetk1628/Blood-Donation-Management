<?php
require("connect.php");
if(isset($_POST["submit"]))
{
  $sql=mysqli_query($con,"INSERT INTO contact (name,email,message) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')");
  
    if($sql)
    {
      echo "<script>alert('Message Sent Successfully')</script>";
    }
    else
    {
      echo "<script>alert('Message Does not Sent Successfully')</script>";
    }
}
?>
<?php
$title = "Contact Us";
require("Common/header.php");
?>
<div class="container">
<div class="contact">
        <div class="container">
            <div class="about-top heading">
                
                <h1 style="font-family:Times New Roman">Contact Us</h1>
                    <form method="post" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" name="message" placeholder="Your Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input type="submit" class="btn btn-primary" value="SEND MESSAGE" name="submit">
                            </div>
                        </div>
                    </form>
                        </div>
        </div>
    </div>
</div>
<?php
require("Common/footer.php");
?>