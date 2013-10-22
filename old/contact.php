<!-- start meta  include -->
    <?php include 'inc/le_meta.php'; ?>
<?php 
$ToEmail = 'youremail@site.com'; 
$EmailSubject = 'Site contact form'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"].""; 
$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>
		
<div class="container content_wrap">
	<div class="row">         

<!-- start sidebar  include -->
	<?php include 'inc/side_menu.php'; ?>
            
            <div class="span7 content_inside">
            	<h3>Contact</h3>

<form action="test.php" method="post"> 
<table width="400" border="0" cellspacing="2" cellpadding="0"> 
<tr> 
<td width="29%" class="bodytext">Your name:</td> 
<td width="71%"><input name="name" type="text" id="name" size="32"></td> 
</tr> 
<tr> 
<td class="bodytext">Email address:</td> 
<td><input name="email" type="text" id="email" size="32"></td> 
</tr> 
<tr> 
<td class="bodytext">Comment:</td> 
<td><textarea name="comment" cols="45" rows="6" id="comment" class="bodytext"></textarea></td> 
</tr> 
<tr> 
<td class="bodytext"> </td> 
<td align="left" valign="top"><input type="submit" name="Submit" value="Send"></td> 
</tr> 
</table> 
</form>

<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'youremail@site.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
Your message was sent
<?php 
} else { 
?> 
<form action="test.php" method="post">
<table width="400" border="0" cellspacing="2" cellpadding="0">
<tr>
<td width="29%" class="bodytext">Your name:</td>
<td width="71%"><input name="name" type="text" id="name" size="32"></td>
</tr>
<tr>
<td class="bodytext">Email address:</td>
<td><input name="email" type="text" id="email" size="32"></td>
</tr>
<tr>
<td class="bodytext">Comment:</td>
<td><textarea name="comment" cols="45" rows="6" id="comment" class="bodytext"></textarea></td>
</tr>
<tr>
<td class="bodytext"> </td>
<td align="left" valign="top"><input type="submit" name="Submit" value="Send"></td>
</tr>
</table>
</form> 
<?php 
}; 
?>
            </div>
            
          <div class="span3 ">
            	<div class="well well-small sidebar_info">
                
               
																
	
	<h4>side bar title</h4>										
		<ul>
			<li class="li_border">
				<h5>sidebar subtitle</h5>
				<ul>
					<li>Total Guest Rooms : 246</li>
				</ul>
			</li>
			<li class="li_border">
				<h5>Room Types</h5>
				<ul>
					<li>Largest Meeting Room : 5408 Sq. Ft.</li>
				</ul>
			</li>
			<li class="li_border">
				<h5>Group Amenities</h5>	
				<ul>	
					<li>Business Center</li>
			   		<li>Concierge</li>
			   		<li>Fitness Center OnSite</li>
			   		<li>In-Room Wired Internet</li>
			   		<li>In-Room Wireless Internet</li>
			   		<li>Pool On Property</li>
			   		<li>Restaurant On-Site</li>
			   	</ul>
			</li>
			<li class="li_border">
				<h5>Local Airports</h5>
				<ul>
					<li>Savannah International Airport : 20 min./14 mi.</li>
					<li>Charleston International Airport : 2.15 hr./110 mi.</li>
					<li>Jacksonville International Airport : 2.2 hr./130 mi.</li>
				</ul>
			</li>
			<li class="li_border last">
				<h5>Convention Centers</h5>
				<ul>
					<li>Savannah International Trade &amp; Conv : 4 miles</li>
				</ul>
			</li>
		</ul>
	</div>
    </div>
            
 </div>  
 </div> 


<!-- start sidebar  include -->
	<?php include 'inc/footer.php'; ?>