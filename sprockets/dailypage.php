<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
if(isset($_GET['day']))
{
    $day = $_GET['day'];
	
}else{

    $day = date('l');
}	
	
	switch($day)
{   

 case 'Monday':
        $copy = 'pixie';
        $pic = 'images/pixie.jpg';
        $sentence = "Daily Hair Special of the Day is: THE PIXIE. Drop in or call to make your appointment today to get this hairstyle for only $20.00. What a steal!*";
        $bg_color = "#dfdfde";
        
    break;   
        
    case 'Tuesday':
        $copy = 'bob';
        $pic = 'images/bob.jpg';
        $sentence = "Daily Hair Special of the Day is: THE BOB. Drop in or call to make your appointment today to get this hairstyle for only $20.00. What a steal!*";
        $bg_color = "#a2798f";
        
    break;    
    
    case 'Wednesday':
        $copy = 'long layers';
        $pic = 'images/longlayers.jpg';
        $sentence = "Daily Hair Special of the Day is: LONG LAYERS. Drop in or call to make your appointment today to get this hairstyle for only $20.00. What a steal!*";
        $bg_color = "#d7c6cf";
        
    break;        
    
    case 'Thursday':
        $copy = 'the rachel';
        $pic = 'images/therachel.jpg';
        $sentence = "For Throwback Thursday Daily Hair Special of the Day is: THE RACHEL. Drop in or call to make your appointment today to get this hairstyle for only $20.00. What a steal!*";
        $bg_color = "#8caba8";
        
    break;  
        
    case 'Friday':
        $copy = 'ombre';
        $pic = 'images/ombre.jpg';
        $sentence = "Daily Hair Special of the Day is: OMBRE COLORING. Drop in or call to make your appointment today to get this hairstyle for only $20.00. What a steal!*";
        $bg_color = "#ebdada";
        
    break;  
        
    case 'Saturday':
        $copy = 'undercut';
        $pic = 'images/undercut.jpg';
        $sentence = "Daily Hair Special of the Day is: AN UNDERCUT. Drop in or call to make your appointment today to get this hairstyle for only $20.00. What a steal!*";
        $bg_color = "#ffaaa5";
        
    break;        
    
    case 'Sunday':
        $copy = 'buzz cut';
        $pic = 'images/buzz.jpg';
        $sentence = "Daily Hair Special of the Day is: A BUZZ CUT. Drop in or call to make your appointment today to get this hairstyle for only $20.00. What a steal!*";
        $bg_color = "#ff8b94";
        
    break;        


}
?>

	<h1>Daily Sepcials</h1>
        <p>Click below to view specials for other days</p>

<p><a href="dailypage.php?day=Monday">Monday</a></p>
<p><a href="dailypage.php?day=Tuesday">Tuesday</a></p>
<p><a href="dailypage.php?day=Wednesday">Wednesday</a></p>
<p><a href="dailypage.php?day=Thursday">Thursday</a></p>
<p><a href="dailypage.php?day=Friday">Friday</a></p>
<p><a href="dailypage.php?day=Saturday">Saturday</a></p>
<p><a href="dailypage.php?day=Sunday">Sunday</a></p>
       		  		
		    
			<?php include 'includes/footer.php'; ?>