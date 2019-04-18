<div class="footer">
	  <div class="footer-grids">
		  <div class="container">
			 <div class="col-md-6 footer-grid">
					<h4>More details</h4>
					<ul>
						<li><a href="About.php">About us</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li><a href="terms.php">Terms & Condition</a></li>
					</ul>
			 </div>
			 <div class="col-md-6 footer-grid contact-grid">
					<h4>Contact us</h4>
					<ul>
						<li><span class="c-icon"> </span>Jalandhar-Dr.Ambedkar chowk</li>
						<li><span class="c-icon1"> </span><a href="mailto:youremailid@domain.com">bishwajeetk003@gmail.com</a></li>
						<li><span class="c-icon2"> </span>+918847606243</li>
					</ul>
					<ul class="social-icons">
						<li><a href="http://facebook.com"><span class="facebook"> </span></a></li>
						<li><a href="http://twitter.com"><span class="twitter"> </span></a></li>
						<!-- <li><a href="#"><span class="thumb"> </span></a></li> -->
					</ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<div class="copy">
		 <p>Copyright &copy; 2018. All rights reserved | Website Designed and Maintained by <a href="https://highest-tax-payer-in-nepal.business.site/">Mr.Bishwajeet Gupta</a></p>
</div>
<script>
	$("#state").on('change',function()
    {
        var state_id = $("#state").val();
    
        $.ajax({
                type:'POST',
                url:'city.php',
                data: 'state_id='+state_id,
                success: function(result)
                {
                    $("#city").html(result);
                },
                error:function(result)
                {
                    $("#city").html("error");
                }

        })
    })
</script>
 <!--footer-->	
</body>
</html>