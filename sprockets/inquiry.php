<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

		<h1>Inquiry Form</h1> 

<?php
//postback2.php
/*
echo '<pre>';
var_dump($_SERVER);
echo '</pre>'
*/

//echo basename($_SERVER['PHP_SELF']);

//define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

/* 

' . XXX . '

*/



if(isset($_POST['First_Name'])) //square bracket means array
{ //if post looking for data
   // echo $_POST['FirstName'];//part of the set of post data
	/*
	echo '<pre>';
	var_dump($_POST);//will let you see all the post form data
	echo '</pre>';
	*/
	
	


$to = 'kmcmor01@seattlecentral.edu';

$subject = 'ITC 240 Contact Form';

$message = process_post();

$replyTo = $_POST['Email'];

$headers = 'From: noreply@seattlecentral.edu' . PHP_EOL .

'Reply-To: ' . $replyTo . PHP_EOL . //user can click reply too. Safer method

'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

	
	echo '<p>
	<a href="' . THIS_PAGE . '">EXIT</a> 
	</p>';
	
	
	
} else { 
	
    echo '
    <form action="' . THIS_PAGE . '" method="post">
First Name: <input type="text" name="First_Name" required="required" autofocus="autofocus" title="First name is required" placeholder="First Name" /><br />
Last Name: <input type="text" name="Last_Name" required="required" autofocus="autofocus" title="First name is required" placeholder="Last Name" /><br />

<p>Email: <input type="email" name="Email" placeholder="Email" required="required" /></p>

<p>I am inquiring about: <br /> <input type="checkbox" name="services" value="web design">Web Design<br/ > <input type="checkbox" name="services" value="Graphic Design">Graphic Design<br /> <input type="checkbox" name="services" value="both">Both</p>

<p>Are you looking for a full time or part time web designer?<br /><input type="radio" name="answer" value="full" >Full Time<br/ > <input type="radio" name="answer" value="part">Part Time</p>

Comments:<br /> <textarea name="Comments"></textarea><br />
<input type="submit" value="Submit" />
</form>
 ';
    
}

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value) 
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
} 

?>
	   
            <?php include 'includes/footer.php'; ?>
            