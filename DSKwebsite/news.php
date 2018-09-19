<!--Joshua Schmidt-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DSK Gaming</title>
	<link rel="icon" href="images/tabIcon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<!--my scripts-->
	<script src="js/signUp.js"></script>
	    	
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/customAssignment.css" rel="stylesheet">

  </head>

  <body>
	<div id="section1"> <!--specifies the "page" for parallax-->
	<div class="section section1"> <!-- Section caller (GENERAL)(SPECIFIC) -->
  
	<!---           ---         --- Start Nav ---               ---         --->
	<div class="manualNav">
		<nav>
			<ul>
				<li><a href="index.html#section1">Home</a></li>
                                <li><a href="index.html#section2">About</a></li>                                
				<li  class="active"><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="faq.html">FAQ</a></li>		
		</nav>
	</div>
	<!---			---			--- Start Banner ---			---			--->
	<div class="row banner">
		<div class="col-sm-12"><img src="images/DSK Branding.png" alt="DSK LOGO" class="logo"></div>
	</div>

	<!---			---			--- Start Pages ---			---			--->
	<div class="row content">
				 
		
		<div class="col-sm-10 col"><h1>Sign up for our news letter.</h1></div>
		<br>
						
            <form id="signForm" name="signupform" method="post" action="thankyounews.php"><!-- form for newsletter sign up -->		 
		 <label for="newsLetter"></label>
		 	<form id="email_form" name="email_form" action="join.html" method="get">
            <label for="email_address1"></label>
            <input type="text" id="email_address1" name="email_address1" placeholder="Your eMail">
            <span id="email" style="color: red">*</span><br>

            <label for="email_address2"></label>
            <input type="text" id="email_address2" name="email_address2" placeholder="Your eMail">
            <span  id="email2" style="color: red">*</span><br>

            <label for="first_name"></label>
            <input type="text" id="first_name" name="first_name" placeholder="Your Name">
            <span  id="fName" style="color: red">*</span><br>

            <label>&nbsp;</label>
            <input type="button" id="join_list" value="Join our List">
		 
		</form> 
	
	</div>

	<div class="row content">
	 

	 
	 
	</div>

	</div> <!--id section-->
	</div> <!--class section-->

</div> <!--id section-->
</div> <!--class section-->


</body>
<footer>
	<p>© Copyright 2016 DSKGaming all rights reserved.</p>
	<a href="#section1"><p>Top of Page</p></a>
</footer>
	
  </body>
</html>
