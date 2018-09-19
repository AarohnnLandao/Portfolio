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
	<script src="js/contact.js"></script>
	    	
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
				<li><a href="news.php">News</a></li>
				<li class="active"><a href="contact.php">Contact</a></li>
				<li><a href="faq.html">FAQ</a></li>
                                <li><a href="admintab.php">Admin</a></li>
                                <li><a href="listemployees.php">Mods</a></li>
		</nav>
	</div>
	<!---			---			--- Start Banner ---			---			--->
	<div class="row banner">
		<div class="col-sm-12"><img src="images/DSK Branding.png" alt="DSK LOGO" class="logo"></div>
	</div>

	<!---			---			--- Start Pages ---			---			--->
	<div class="row content">
		<div class="col-sm-6 col"><h1>Contact us!</h1></div><br>
		
		<div class="col-sm-6 col">		 
		 <form id="uForm" name="conatctform" method="post" action="thankyoucontact.php"><!-- Contact form -->
		 
		 <label for="email"></label>
		 	<input type="text" id="uEmail" name="uEmail" placeholder="Your eMail address.."><br>
		 <label for="emailContent"></label>
			<textarea name="emailContent" id="uContent" class="textarea" placeholder="Send us a message"></textarea><br>			
			<span  id="uEmailAlert" style="color: red">*</span>
		 <div><h1><input type="button" onclick="uSubmit()" value="SEND"><h1></div>													
		 
		 </form>
		 </div>
	
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
