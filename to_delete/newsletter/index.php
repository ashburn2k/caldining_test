<?php 
/* Customise These Values */
$name = 1;	 			//set to 1 to show name field, 0 to hide name field
$name = $_REQUEST['name'];				 
$successMessage = '<h1>Thank you for your interest!</h1><p>We will contact you with more information when the site launches</p>';

$exportPass = 'password'; //change this to something more secure
/* Delete This */
$_REQUEST['pass']=$exportPass; 
/* End Delete */


if($_REQUEST['export']=='true'&&$_REQUEST['pass']==$exportPass){
    $file='data.csv';
    header("Content-type: application/force-download");
    header("Content-Transfer-Encoding: Binary");
    header("Content-length: ".filesize($file));
    header("Content-disposition: attachment; filename=\"".basename($file)."\"");
	header("Expires: ".gmdate("D, d M Y H:i:s")." GMT"); 
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: nocache");
    readfile("$file");
}else{
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="jquery-1.3.2.min.js"></script>
    <script language="javascript">
    $(document).ready(function(){ 
        $("form#register").submit(function(){ 
              var email = $("input#email").val();
              var name = $("input#name").val();
              if (email==""||email=="Email")
			  {
					$('#emailInput').append("<p class='required'>required</p>");
					document.register.email.value='Email';
					return false;
			  }else if(email.indexOf("@") < 1){ // very basic check if email address entered is valid
					$('#emailInput').append("<p class='required'>invalid</p>"); //could have a different image for invalid input
					document.register.email.focus();  //could be used to focus on email field
					return false;				  	
			  }else{
				  var sendData = 'email='+ email + '&name=' + name;
				  $.ajax({
					type: "POST",
					url: "submit.php",
					data: sendData,
					success: function() {
					  $('#right').html("<div id='submitted'></div>");
					  $('#submitted').html("<?php echo $successMessage;?>")
					  .hide()
					  .fadeIn(1000, function() {
						
					  });
					}
				  });
				  return false;
			  }
        });  
    });  
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Beta Splash Page</title>
    </head>
    
    <body>
    
    <?php if($_REQUEST['pass']==$exportPass){ ?>
    <div style="position:absolute; top:10px; left:10px; z-index:99; color:#FFF;">
    	<a href="index.php?export=true&pass=<?php echo $exportPass; ?>&time=<?php echo time(); ?>">Export all entries</a>
    </div>
    <?php }?>
    
    <!--main div start -->
            <div id="mainDiv" class="emailForm3Bg">
                <!--opacity part start -->
                    <div class="opacityDiv">
                        <!--left part start -->
                            <div id="left">
                              <h2>hello there!</h2>
                                <p>It’s nice to see that you’re interested in our site.<br />
                                Enter your details and we’ll notify you on launch!</p>
                            </div>
                        <!--left part end -->
                        <!--right part start -->
                            <div id="right">
                                <form id="register" name="register" method="post" action="submit.php">
                                    <?php if($name==1){?>  
                                    <input name="name" id="name" type="text" value="Name" class="textBox" maxlength="54" onfocus="if(this.value=='Name')this.value='';" />
                                    <?php } ?>   
                                    <div id="emailInput" class="fromrelative">
                                    <input name="email" id="email" type="text" value="Email" class="blueTextBox" maxlength="54" onfocus="if(this.value=='Email')this.value='';" />
                                   
                                    </div>
                                    <input name="Submit" type="submit" value="" class="submit" />
                                </form>
                            </div>
                        <!--right part end -->
                        <br class="spacer" />
                    </div>
                <!--opacity part end -->
            </div>
        <!--main div end -->
    </body>
    </html>
<?php 
}
?>