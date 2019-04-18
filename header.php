<?php
session_start();
@$id=$_SESSION['userid'];
?>
<html>
<head>
 <title><?php echo $title; ?></title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/web.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/back-to-top.js" type="text/javascript"></script>
					<script src="js/responsiveslides.min.js"></script>
					 <script>
					     $(function () {
					         $("#slider3").responsiveSlides({
					             auto: true,
					             pager: false,
					             nav: false,
					             speed: 500,
					             namespace: "callbacks",
					             before: function () {
					                 $('.events').append("<li>before event fired.</li>");
					             },
					             after: function () {
					                 $('.events').append("<li>after event fired.</li>");
					             }
					         });

					     });
					  </script>
</head>
<body>
<div class="header">
	  <div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/logo-3.png" alt="" /></a>
			</div>
			<div class="menu">			
			  <div class="top-menu navigation">
				 <span class="menu"></span> 
				 <ul class="navig">
					 <li class="active"><a href="index.php">Home</a></li>
					                     
                    	<?php
						if($id=="")
						{
						?>
						 <li><a href="search.php">Search</a></li>
					 <li><a href="Contact.php">Contact</a></li>
					 
					 <li><a href="emergency.php">Emergency</a></li>  
                            <li><a href="login.php">Login</a></li>
                            <li><a href="Donation.php">Registration</a></li>
                             <li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Test<i class="fa fa-fw fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="description.php#white">White Blood Cells (WBC)</a></li>
							<li><a href="description.php#red">Red Blood Cells (RBC)</a></li>
                            <li><a href="description.php#hgb">Hemoglobin (HGB)</a></li>
                            <li><a href="description.php#plat">Platelets</a></li>
                        </ul>
                    </li>
				   <li><a href="admin.php">Admin-Login</a></li>
             	</ul>	
			</div>
		 <script>
		     $("span.menu").click(function () {
		         $(" ul.navig").slideToggle("slow", function () {
		         });
		     });
		 </script>

			</div>
		  <div class="clearfix"></div>
	 </div>	
</div>
                            <?php
						}
						elseif($id=="11616782")
						{
							?>
                            <li><a>Welcome Admin <img src="images/bisu.png" width="50px" height="50px" style="border-radius:50%"></a></li>
                            <li><a href="logout.php">Logout</a></li>
                            </ul>	
			</div>
		 <script>
		     $("span.menu").click(function () {
		         $(" ul.navig").slideToggle("slow", function () {
		         });
		     });
		 </script>

			</div>
		  <div class="clearfix"></div>
	 </div>	
</div>
                        <?php
						} 
                        else
                        {
							?>
							<li><a href="userprofile.php">Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            </ul>	
			</div>
		 <script>
		     $("span.menu").click(function () {
		         $(" ul.navig").slideToggle("slow", function () {
		         });
		     });
		 </script>

			</div>
		  <div class="clearfix"></div>
	 </div>	
</div>
                        <?php
						} ?>
						
						

						