<?php 

	require_once("./inc/functions.php"); 
	
?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Volunteer Page -->
<html lang="en">
	<head> <!-- header -->
		<title>United Way of Athens-Limestone County</title> <!-- Website Title -->
		<meta charset = "utf-8" />
		<link rel="shortcut icon" href="images/uw_icon.ico" type="image/ico" /> <!-- Website Icon -->
		<link href="/inc/css/style.css" type="text/css" rel="stylesheet"> <!-- include the css style sheet style.css -->		
		<script src="/inc/js/jquery/jquery.min.js"></script>	<!-- include jQuery -->			
		<script src="/inc/js/jquery/jquery.cycle2.min.js"></script> <!-- include Cycle2 http://jquery.malsup.com/cycle2/ -->		
		<script src="/inc/js/jquery/jquery.cycle2.ie-fade.min.js"></script> <!-- include support for older versions of IE-->
	</head>
		<body>
		<?php get_home_banner(); ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->		
		<?php get_main_menu(); ?>
<!--Sidebar Code-->			
		<br> 
		<div id="wrapper2"> <!-- css division "wrapper2" -->
			<div id = "sideQuote"><br><br> <!-- css division "sidQuote" --> 
				<div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="10000" data-cycle-slides="li" data-cycle-random="true" data-cycle-loop="100" data-index=1> <!-- using Cylce2, slideshow of photos -->
				   <ul>
						<li><img src="images/sidebar1.jpg" alt='sidebar1' height='130' width='200' /></li>
						<li><img src="images/sidebar2.jpg" alt='sidebar2' height='130' width='200' /></li>
						<li><img src="images/sidebar3.jpg" alt='sidebar3' height='130' width='200' /></li>
						<li><img src="images/sidebar4.jpg" alt='sidebar4' height='130' width='200' /></li>
						<li><img src="images/sidebar5.jpg" alt='sidebar5' height='130' width='200' /></li>
						<li><img src="images/sidebar6.jpg" alt='sidebar6' height='130' width='200' /></li>
						<li><img src="images/sidebar7.jpg" alt='sidebar7' height='130' width='200' /></li>
						<li><img src="images/sidebar8.jpg" alt='sidebar8' height='130' width='200' /></li>
				   </ul> 
				</div>
				<div class="spacer heightThirteen"></div> <!-- css division "heightThirteen" for sidebar spacing-->
				<div class="sideQuote center spacer"> <!-- css division "heightThirteen" for sidebar divider -->
				<div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="10000" data-cycle-slides="li" data-cycle-loop="100" data-index=2> <!-- using Cylce2, slideshow of quotes -->
					<ul>
						<li><p class="left">&ldquo;We make a living by what we get,<br>&nbsp;we make a life by what we give.&rdquo;</p><p>&ndash;Winston Churchill</p></li>
						<li><p class="left">&ldquo;You really can change the world if you care enough.&rdquo;</p><p>&ndash;Marion Wright Edelman</p></li>
						<li><p class="left">&ldquo;Never doubt that a small group<br>&nbsp;of thoughtful, committed citizens<br>&nbsp;can change the world.
							<br>&nbsp;Indeed it is the only<br>&nbsp;thing that ever has.&rdquo;<br></p><p>&ndash;Margaret Mead</p></li>
						<li><p class="left">&ldquo;The best way to find yourself<br>&nbsp;is to lose yourself in the service<br>&nbsp;of others.&rdquo;</p><p>&ndash;Ghandi</p></li>
						<li><p class="left">&ldquo;No act of kindness,<br>&nbsp;no matter how small,<br>&nbsp;is ever wasted.&rdquo;</p><p>&ndash;Aesop</p></li>
						<li><p class="left">&ldquo;Nobody can do everything,<br>&nbsp;but everyone can do<br>&nbsp;something.&rdquo;</p><p>&ndash;Author unknown</p></li>
						<li><p class="left">&ldquo;Service to others is the rent<br>&nbsp;you pay for your room<br>&nbsp;here on earth.&rdquo;</p><p>&ndash;Mohammed Ali</p></li>
						<li><p class="left">&ldquo;The best and most beautiful<br>&nbsp;things in the world<br>&nbsp;cannot be seen<br>&nbsp;or even touched<br>&nbsp;- they must be felt<br>&nbsp;with the heart.&rdquo;</p><p>&ndash;Helen Keller</p></li>
					</ul>	  
				</div><br><br>                      			
			</div></div>  <!-- close css division "sidQuote" -->
<!-- Main Content Starts Below-->								
				<div id="content"> <!-- css division "content" -->			
				<h2>Contact Us</h2> <!-- Header 2 style -->
				<!-- paragraph -->
				<p>
				<!-- Address with link to Google Maps -->
				<a href="https://maps.google.com/maps?q=419+South+Marion+Street,+Athens,+AL&daddr=419+S+Marion+St,+Athens,+AL+35611&hl=en&safe=strict&hnear=419+S+Marion+St,+Athens,+Alabama+35611&t=m&geocode=%3BCRcHfh36VeuXFe3-EgIdy-zQ-im5UdqSaItiiDGYGqDdFVcFPA&z=14" target="_blank"> 419 South Marion Street<br>Athens, AL 35611<br></a>
				<!-- Email address with link to open a new outgoing email -->
				<a href="mailto:unitedway44@unitedwayalc.com?" title="unitedway44@unitedwayalc.com">unitedway44@unitedwayalc.com</a><br>
				<!-- Phone number with link to call from a smartphone  -->
				Phone: <a href="tel:2562332323">256-233-2323</a><br/>
				Fax: <a href="tel:2562332323">256-232-2373</a><br/><br/>				
				<!-- Embedded Google Map showing the location of the United Way -->
				<iframe width="425" height="350" class="right" src="https://maps.google.com/maps?safe=strict&amp;q=419+South+Marion+Street,+Athens,+AL&amp;ie=UTF8&amp;hl=en&amp;hq=&amp;hnear=419+S+Marion+St,+Athens,+Alabama+35611&amp;ll=34.799341,-86.971189&amp;spn=0.011154,0.024698&amp;t=m&amp;z=14&amp;output=embed"></iframe><br></p>				 					
				<hr> <!-- horizontal bar -->				
				</div> <!-- close css division "content" -->
			</div>  <!-- close css division "wrapper2" --> 
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->
		</body>
</html>