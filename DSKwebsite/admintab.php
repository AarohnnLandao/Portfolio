<!--Joshua Schmidt-->
<?php
require('database\database.php'); //external login
//retrieve data
class Contact {
    private $modNumber;
    private $modName;

    public function __construct($contactID, $ModeratorNumber, $contactEmail, $contactMessage) {
        $this->contactID = $contactID;
        $this->ModeratorNumber = $ModeratorNumber;
        $this->contactEmail = $contactEmail;
        $this->contactMessage = $contactMessage;
    }

    public function getcontactID() {
        return $this->contactID;
    }

    public function setcontactID($value) {
        $this->contactID= $value;
    }

    public function getModeratorNumber() {
        return $this->ModeratorNumber;
    }

    public function setModeratorNumber($value) {
        $this->ModeratorNumber= $value;
    }
    public function getcontactEmail() {
        return $this->contactEmail;
    }

    public function setcontactEmail($value) {
        $this->contactEmail = $value;
    }
     public function getcontactMessage() {
        return $this->contactMessage;
    }

    public function setcontactMessage($value) {
        $this->contactMessage = $value;
    }
    
}
//retreive data
class ContactsDB {
    public static function getContacts() {
        $db = Database::getDB();
        $query = 'SELECT * FROM contactform
                  ORDER BY contactID';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $contacts = array();
        foreach ($statement as $row) {
            $contact = new Contact($row['contactID'],
                                   $row['ModeratorNumber'],
                                   $row['contactEmail'],
                                   $row['contactMessage']);
            $contacts[] = $contact;
        }
        return $contacts;
    }
}
//delete items
if (filter_input(INPUT_POST, "contactID")){      
    $deleteitemqueue = filter_input(INPUT_POST, "contactID", FILTER_VALIDATE_INT); //testing 
    //echo $deleteitemqueue;
    delete_item($deleteitemqueue);      
}
function delete_item($contactID) {
    try {
    $db = Database::getDB();
    $query = 'DELETE FROM contactform
              WHERE contactID = :contactID';
    $statement = $db->prepare($query);
    $statement->bindValue(':contactID', $contactID);
    $statement->execute();
    $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database/database_error.php');
        echo "DB Error: " . $error_message; 
        exit();
    }
}
$contacts = ContactsDB::getContacts();
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
		</nav>
	</div>
	<!---			---			--- Start Banner ---			---			--->
	<div class="row banner">
		<div class="col-sm-12"><img src="images/DSK Branding.png" alt="DSK LOGO" class="logo"></div>
	</div>

	<!---			---			--- Start Pages ---			---			--->
	<div class="row content">
		<div class="col-sm-6 col"><h1>Admin Tools</h1></div><br>
             
         <!-- START THE TABLE FOR INVOICES, EDIT LATER -->       
            <table id="datalist">
            <tr>
                <th><p>Contact Number</p></th>
                <th><p>Moderator Number</p></th>
                <th><p>Contact Email</p></th>
                <th><p>Contact Message</p></th>
                <th><p>Close Ticket</p></th>
            </tr>  
                 <?php foreach($contacts as $contact) : ?>
            <tr>
                 <td>   <?php echo $contact->getcontactID(); ?> </td>
                 <td>   <?php echo $contact->getmoderatorNumber(); ?> </td>
                 <td>   <?php echo $contact->getcontactEmail(); ?>  </td>
                 <td>   <?php echo $contact->getcontactMessage(); ?>  </td>
                 <td> <form action="./admintab.php" method="post"
                          id="delete_contact_form">                    
                    <input type="hidden" name="contactID"
                           value="<?php echo $contact->getcontactID(); ?>">                                         
                    <input type="submit" value="Close Ticket" name="delete_contact" />
                     </form>
                 </td>
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
