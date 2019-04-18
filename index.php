<?php
$title = "Blood Donation";
@$id=$_SESSION['userid'];
require("Common/header.php");
if($id=='11616782')
{
	$con=mysqli_connect('localhost','root','','bloodbank');
	$query="SELECT * FROM contact";
	$query2="SELECT * FROM register";
	$com = mysqli_query($con,$query);
	$om= mysqli_query($con,$query2);

                if(mysqli_num_rows($com)>0)
                {
?>
               <br><br><br><br><br>
                   <center> <h1>Message List</h1></center><br>
                    <table class="table table-responsive table-condensed table-bordered">

                        <tr>
                            <td>Sr no</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Message</td>
                        </tr>
                        <?php $idi = 0; while($row = mysqli_fetch_array($com))
                        {
                            $idi++;
                            echo ("<tr><td>$idi</td>");
                            echo ("<td>$row[name]</td>");
                            echo ("<td>$row[email]</td>");
                            echo ("<td>$row[message]</td>");
                        }
                        echo '</table><br><br><br><br>';
                    }
                    else
                    {
                        echo "<h2>Unable to fetch messages</h2>";
                    }
                if(mysqli_num_rows($om)>0)
                {
                    ?>

                    <br>
                    <center><h1>Registered Users</h1></center><br>
                    <table class="table table-responsive table-condensed table-bordered">

                        <tr>
                            <td>Sr no</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Age</td>
                            <td>Gender</td>
                            <td>Blood Group</td>
                            <td>State</td>
                            <td>City</td>
                            <td>Address</td>
                            <td>Contact No.</td>
                            <td>Available for Donation</td>
                        </tr>
                        <?php $idi = 0; while($bow = mysqli_fetch_array($om))
                        {
                            $idi++;
                            echo ("<tr><td>$idi</td>");
                            echo ("<td>$bow[name]</td>");
                            echo ("<td>$bow[email]</td>");
                            echo ("<td>$bow[age]</td>");
                            echo ("<td>$bow[gender]</td>");
                            echo ("<td>$bow[bloodgroup]</td>");
                            echo ("<td>$bow[state]</td>");
                            echo ("<td>$bow[city]</td>");
                            echo ("<td>$bow[address]</td>");
                            echo ("<td>$bow[mobileno]</td>");
                           if($bow['is_donated'] == 1)
                            {
                                echo "<td>YES</td></tr>";
                            }
                            else
                            {   
                                echo "<td>NO</td></tr>";
                            }
                        }
                        echo '</table><br><br><br><br>';
                    }
                    else
                    {
                        echo "<h2>Unable to details</h2>";
                    }
                    ?>
<?php
}
else
{
?>
 <div class="banner">
	 <div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li><div class="banner-bg"></div></li>
				<li><div class="banner-bg banner2"></div></li>
				<li><div class="banner-bg banner3"></div></li>
			 </ul>
	 </div>
	 <div class="container">
		 <div class="banner-sec">
			 <div class="banner-top">
						<div class="col-md-4 banner-text">
							<div class="banner-text_grid">
							 <img src="images/icon1.png" class="img-responsive" alt="/">
							<h4>Save Life</h4>
							<p>One Blood donation can save upto Three Lives..</p>
							</div>
						</div>
						<div class="col-md-4 banner-text">
							<div class="banner-text_grid">
							 <img src="images/icon2.png" class="img-responsive" alt="/">
							<h4>Blood Test</h4>
							<p>Just Register and get the team in your Home for Blood Test.</p>
							</div>
						</div>
						<div class="col-md-4 banner-text">
							<div class="banner-text_grid">
							 <img src="images/icon3.png" class="img-responsive" alt="/">
							<h4>Blood Donation</h4>
							<p>World Blood Donor Day 14th June 2016.</p>
							</div>
						</div>				
				 <div class="clearfix"></div>
			 </div>
		 </div>
	 </div>
</div>
<!--welcome-starts--> 
<div class="welcome">
		<div class="container">
			<div class="welcome-top">
				<h1>Support to Support</h1>
				<p> Blood is universally recognized as the most precious element that sustains life. 
                             It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, 
                             approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year.
Donate Blood 	  	

Despite the increase in the number of donors, blood remains in short supply during emergencies, 
mainly attributed to the lack of information and accessibility.

We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
                             <br />
            </div>
			<div class="welcome-top">
                <h1>What You Should Eat Before Donating </h1>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! 
                Check out the following recommended foods to eat prior to your donation.<br />
                <ul>
                            <p>Low fat foods</p>
                            <p>Iron rich foods</p></ul></p>
            </div>
		</div>
</div>
<!--welcome-ends-->
<!--nature-starts--> 
<div class="nature">
		<div class="container">
			<div class="nature-top">
				<h3>Blood Bank</h3>
				<p>Blood is universally recognized as the most precious element that sustains life. 
                             It saves innumerable lives across the world in a variety of conditions.</p>
			</div>
		</div>
</div>
<!--nature-ends-->
<?php
}
require("Common/footer.php");
?>