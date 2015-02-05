<!DOCTYPE html>

<!--
TALK SHOP!
-->

<?php
    
    date_default_timezone_set('America/Phoenix');
    
    $timezone = date_default_timezone_get();
    
    echo "The Current Server Timezone is: " . $timezone;
    
    $date = date('m/d/y H:i:s a', time());
    
    echo "The Current Time is: " . $date;
    
    
    
    
    
    
    
    
    ?>

<html lang="en">
  	
  <head>
  
    <!-- Meta tag -->
	<meta name="robots" content="noindex, nofollow" />
    <meta charset="utf-8" />
	
	<!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="style.css" />

	<!-- Link tag for JavaScript -->
		<!-- <script type="text/javascript" src=""></script> -->
	
	<!-- Link tag for Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	
	<!-- Link tag for favicon -->
		<!-- <link rel="icon" href="" type="image/ico" /> -->

    <!-- Web Page Title -->
    <title>Talk Shop</title>

  </head>

  <body>
	
	<div id="title">
		<div id="title1">TALK</div>
		<div id="title2">SHOP</div>
	</div>
  
	<div id="topBar">
		<div id="login">
			<div id="loginText">LOGIN</div>
		</div>
		<div id="register">
			<div id="registerText">REGISTER</div>
		</div>
	</div>
	
	<div id="blackBox"></div>
	
	<div id="speakerButton">
		<div id="speaker">Connect with Speakers</div>
	</div>
	
	<div id="teacherButton">
		<div id="teacher">Connect with Teachers</div>
	</div>
	
	<div id="image">
		<img src="images/homepage.jpg" alt="image"/>
	</div>
	
	<div id="aboutSection">
		<div id="aboutUsTitle">WHAT IS TALK SHOP?</div>
		
		<div id="aboutUsDescriptionHolder">
			<div id="aboutUsDescriptionText">
				Lorem ipsum dolor sit amet, sit libero amet at quis sed, nonummy consequat amet nullam, ut tellus orci molestie natoque donec cursus. Arcu <br />
				volutpat, praesent libero. Sociosqu risus urna in, eleifend in ut dolor, phasellus nec in vivamus justo vestibulum, proin neque a <br />
				massa, id est eros sed dignissim vitae eros. Mauris molestie, blandit gravida, ut ipsum ullamcorper magna dis amet diam, vestibulum <br />
				elit ultricies aliquam consectetuer id, nulla ad velit dignissim a aenean pede. Arcu non ut sed pede habitasse lobortis, purus tempus <br />
				quam fringilla, eget rutrum, nisl dui mi non. Scelerisque neque, viverra auctor vulputate erat eu. Tempor ullamcorper feugiat senectus <b   r />
				morbi, lacus duis et turpis, mauris ut elit ut vel wisi, libero ac, at volutpat scelerisque pharetra sed iaculis.
			</div>
		</div>
		
		<div id="socialMediaHolder">
			<a href="https://www.facebook.com/talkshopco/" onclick="window.open(this.href); return false;"><img src="images/facebook.png" alt="facebook" /></a>
			<a href="https://www.twitter.com/talkshopco/" onclick="window.open(this.href); return false;"><img src="images/twitter.png" alt="twitter" /></a>
		</div>
		
	</div>
	
	<div id="bottomBar">
		<div id="bottomBarText">&copy;2015 TALKSHOP | Made in Tempe, AZ</div>
	</div>
	
  </body>

</html>