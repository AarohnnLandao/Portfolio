<!--Joshua Schmidt-->
<?php
require('database\database.php'); //External Database Class for login

class Moderator {
    private $modNumber;
    private $modName;

    public function __construct($modNumber, $modName, $modEmail) {
        $this->modNumber = $modNumber;
        $this->modName = $modName;
        $this->modEmail = $modEmail;
    }

    public function getmodNumber() {
        return $this->modNumber;
    }

    public function setmodNumber($value) {
        $this->modNumber = $value;
    }

    public function getmodName() {
        return $this->modName;
    }

    public function setmodName($value) {
        $this->modName = $value;
    }
     public function getmodEmail() {
        return $this->modEmail;
    }

    public function setmodEmail($value) {
        $this->modEmail = $value;
    }
    
}
//retrieve data
class ModeratorDB {
    public static function getModerators() {
        $db = Database::getDB();
        $query = 'SELECT * FROM moderators
                  ORDER BY modNumber';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $moderators = array();
        foreach ($statement as $row) {
            $moderator = new Moderator($row['modNumber'],
                                       $row['modName'],
                                       $row['modEmail']);
            $moderators[] = $moderator;
        }
        return $moderators;
    }
}
$moderators = ModeratorDB::getModerators();
?>

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
				<li><a href="contact.php">Contact</a></li>
				<li><a href="faq.html">FAQ</a></li>
                                <li><a href="admintab.php">Admin</a></li>
                                <li class="active"><a href="listemployees.php">Mods</a></li>
		</nav>
	</div>
	<!---			---			--- Start Banner ---			---			--->
	<div class="row banner">
		<div class="col-sm-12"><img src="images/DSK Branding.png" alt="DSK LOGO" class="logo"></div>
	</div>

	<!---			---			--- Start Pages ---			---			--->
	<div class="row content">
		<div class="col-sm-6 col"><h1>List Employees</h1></div><br>
               
         <!-- START THE TABLE FOR MODERATORS -->       
        <table id="datalist">
            <tr>
                <th><p>Moderator Number</p></th>
                <th><p>Moderator Name</p></th>
                <th><p>Moderator Email</p></th>
            </tr>        
                   <?php foreach($moderators as $moderator) : ?>
            <tr>
                <td> <?php echo $moderator->getmodNumber(); ?> </td>
                <td> <?php echo $moderator->getmodName(); ?>  </td>
                <td> <?php echo $moderator->getmodEmail(); ?> </td> 
            </tr>
            <?php endforeach; ?>
        </table>   
                
        <!-- END EDIT AREA -->        
                
                
                
                    
                    
                    
                	
                
                
                
	</div>

	<div class="row content">
	 
	 
	</div>

	</div> <!--id section-->
	</div> <!--class section-->

</div> <!--id section-->
</div> <!--class section-->


</body>

</html>
