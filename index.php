<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 //function hideURLbar(){ window.scrollTo(0,1); } 
 
 
 </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

</head>
<body>
<!--header-->
<!--sticky-->
<?php include('function.php'); ?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4>Our Vision</h4>
			 <p>Our vision is to make travel simple and fun for all, and our core values guide us in making this possible. These core values can be seen in the projects that we undertake, and the way in which we solve problems for our customers. They are a representation of OUR BEING & OUR DOING. Each member of our family is guided by them, each and every day. Finding cheap flights has never been less demanding. Spare time, set aside some cash; there's no compelling reason to visit a great many websites to discover cheap flight tickets or the best deal. It's everything here for you in one area Travolook-we'll get you where you need to go. Travolook is the leading travel site, a place where individuals are enlivened to plan and book straightforwardly from us with a significant number of flight ticket choices at the best costs. We are impartial and free, which implies that a million individuals who use us consistently can confide in our numerous scope of flight, alternatives.</p>

		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4>Our Mission</h4>
			 <p>We take off aggressive costs on flight tickets, from probably the most confided companies. We offer you energizing deals to commence your get-away with the goal that it doesn't put an opening in your pocket. You can rest guaranteed that you are getting the best flight deal alongside value reserve funds.</p>

             <p>As yet asking why you should book with us? We have a smooth and hassle free reserving procedure that can provide you with astonishing travel deals. If you are worn out on looking for the best charges, Travolook is here to encourage you.</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4>Safety Information</h4>
			 <p>We will send booking confirmation, itinerary information, cancellation, payment confirmation, refund status, schedule change or any such other information relevant for the transaction or booking made by the User, via SMS, internet-based messaging applications like WhatsApp, voice call, e-mail or any other alternate communication detail provided by the User at the time of booking.</p>

 
            <p>We may also contact the User through the modes mentioned above for any pending or failed bookings, to know the preference of the User for concluding the booking and also to help the User for the same.</p>
		 </div>
	 </div>
</div>
<!--/About-->
<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>		 
		  </div>
	     
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							
						     <img src="images/t1.jpg" class="img-responsive" alt=""/>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
				
						     <img src="images/t2.jpg" class="img-responsive" alt=""/>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							
						     <img src="images/t3.jpg" class="img-responsive" alt=""/>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						     <img src="images/t4.jpg" class="img-responsive" alt=""/>
							 
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						     <img src="images/t5.jpg" class="img-responsive" alt=""/>
							 
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						     <img src="images/t6.jpg" class="img-responsive" alt=""/>
							
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<img src="images/t7.jpg" class="img-responsive" alt=""/>
							
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						     <img src="images/t8.jpg" class="img-responsive" alt=""/>
							 
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  

<!--/top-tours-->

<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <br>
		  <h4 style="color:#000">Plan Your Trip</h4>
		  <br>
		  <h5 style="color:#000">Our travel experts can help you book now</h5>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F"></h4>
						<p style="color:#000"><br/>
                        </p>
                        <br/>
                      </div>
				  <div class="col-md-8 contact">
                  
                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="email" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	       



<?php include('bottom.php'); ?>
</body>
</html>

