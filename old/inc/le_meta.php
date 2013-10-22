<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="//use.typekit.net/sgx6nzw.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!-- Le styles -->
<link href="http://test-catering.housing.berkeley.edu/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="http://test-catering.housing.berkeley.edu/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="all">
<link href="http://test-catering.housing.berkeley.edu/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="http://test-catering.housing.berkeley.edu/quform/css/page.css" />
<link rel="stylesheet" type="text/css" href="http://test-catering.housing.berkeley.edu/quform/css/base.css" />
<link rel="stylesheet" type="text/css" href="http://test-catering.housing.berkeley.edu/quform/themes/light/light.css" />	
<link rel="stylesheet" type="text/css" href="http://test-catering.housing.berkeley.edu/css/snap.css" />
<link rel="stylesheet" type="text/css" href="http://test-catering.housing.berkeley.edu/css/demo.css" />
<link rel="stylesheet" id="main_styles_css" href="http://test-catering.housing.berkeley.edu/css/main.css" type="text/css" />
<link rel="stylesheet" id="main_styles_css" href="http://test-catering.housing.berkeley.edu/css/mobile.css" type="text/css" media="screen and (max-device-width: 480px)">



<?php
$url = $_SERVER['PHP_SELF'];

/* page arrays */
$main_pages = array("/quform/process.php","/book_event.html","/getting_here/ckc.html","/contact.html","/newsletter.html","/404page.html");
$events_pages = array("/events/index.html","/events/faq.html","/events/menus.html","/events/services.html","/events/photo/gallery1.html","/events/photo/gallery2.html","/events/event_space.html","/events/policies.html","/events/rooms/sargent.html","/events/rooms/warring.html","/events/rooms/clark.html","/events/rooms/edr.html","/events/rooms/garden.html","/events/rooms/great.html","/events/rooms/john.html","/events/rooms/krutch.html","/events/rooms/newel.html","/events/menus/beverages.html","/events/menus/box_meal.html","/events/menus/breakfast.html","/events/menus/snacks.html","/events/menus/make_meal.html","/events/menus/appetizers.html","/events/menus/theme.html","/events/menus/desserts.html","/events/services/services.html","/events/services/audio.html","/events/services/internet.html","/events/services/event_planning.html","/events/services/event_space.html","/events/services/history.html","/events/services/room_rentals.html","/events/services/support_services.html","/events/policies/catering.html","/events/policies/other.html","/events/policies/payment.html","/events/policies/reservation.html","/events/faq/catering.html","/events/faq/events.html","/promo.html","/events/menus/holiday2013.html","/events/policies/cancellation.html","/events/services/eatwell.html");
$events_service_pages = array("/events/services/services.html","/events/services/audio.html","/events/services/internet.html","/events/services/event_planning.html","/events/services/room_rentals.html","/events/services/support_services.html","/events/services/eatwell.html");
$events_photo_pages = array("/events/photo/gallery1.html","/events/photo/gallery2.html");
$events_room_pages = array("/events/rooms/sargent.html","/events/rooms/warring.html","/events/rooms/clark.html","/events/rooms/edr.html","/events/rooms/garden.html","/events/rooms/great.html","/events/rooms/john.html","/events/rooms/krutch.html","/events/rooms/newel.html","/events/event_space.html","/events/services/event_space.html");
$events_menu_pages = array("/events/menus/beverages.html","/events/menus/box_meal.html","/events/menus/breakfast.html","/events/menus/snacks.html","/events/menus/make_meal.html","/events/menus/appetizers.html","/events/menus/theme.html","/events/menus/desserts.html","/events/menus/holiday2013.html");
$events_policies_pages = array("/events/policies/catering.html","/events/policies/other.html","/events/policies/payment.html","/events/policies/reservation.html","/events/policies/cancellation.html");
$events_faq_pages = array("/events/faq/catering.html","/events/faq/events.html");

$delivery_pages = array("/delivery/menus/beverages.html","/delivery/menus/box_meal.html","/delivery/menus/breakfast.html","/delivery/menus/sandwich.html","/delivery/menus/make_meal.html","/delivery/menus/soup_salad.html","/delivery/menus/entertaining.html","/delivery/menus/allday.html","/delivery/menus/desserts.html","/delivery/policies.html","/delivery/about_boudin.html","/delivery/index.html","/delivery/faq.html","/delivery/menus.html","/delivery/service/services.html","/delivery/photo.html","/delivery/policies/order.html","/delivery/policies/ordering.html","/delivery/policies/payment.html","/delivery/policies/delivery.html","/delivery/policies/cancellation.html","/delivery/service/eatwell.html");
$delivery_menu_pages = array("/delivery/menus/beverages.html","/delivery/menus/box_meal.html","/delivery/menus/breakfast.html","/delivery/menus/sandwich.html","/delivery/menus/make_meal.html","/delivery/menus/soup_salad.html","/delivery/menus/entertaining.html","/delivery/menus/allday.html","/delivery/menus/desserts.html");
$delivery_policies_pages = array("/delivery/policies/order.html","/delivery/policies/ordering.html","/delivery/policies/payment.html","/delivery/policies/delivery.html","/delivery/policies/cancellation.html");
$delivery_service_pages = array("/delivery/service/services.html","/delivery/service/eatwell.html");


/* main pages */
$newsletter = "/newsletter.html";
$contact = "/contact.html";
$ckc = "/getting_here/ckc.html";
$book_event = "/book_event.html";
$getting_here ="/getting_here/ckc.html";

/* events pages */
$events_index = "/events/index.html";
$events_faq = "/events/faq.html";
$events_menus = "/events/menus.html";

$events_service_index = "/events/services/services.html";
$events_service_space = "/events/services/event_space.html";
$events_service_audio = "/events/services/audio.html";
$events_service_planning = "/events/services/event_planning.html";
$events_service_rentals = "/events/services/room_rentals.html";
$events_service_support = "/events/services/support_services.html";
$events_service_history = "/events/services/history.html";
$events_service_eatwell = "/events/services/eatwell.html";

$events_menu1 = "/events/menus/appetizers.html";
$events_menu2 = "/events/menus/beverages.html";
$events_menu3 = "/events/menus/box_meal.html";
$events_menu4 = "/events/menus/breakfast.html";
$events_menu5 = "/events/menus/desserts.html";
$events_menu6 = "/events/menus/make_meal.html";
$events_menu7 = "/events/menus/snacks.html";
$events_menu8 = "/events/menus/theme.html";
$events_menu9 = "/events/menus/holiday2013.html";

$events_photo1 = "/events/photo/gallery1.html";
$events_photo2 = "/events/photo/gallery2.html";

$events_room1 = "/events/rooms/sargent.html";
$events_room2 = "/events/rooms/warring.html";
$events_room3 = "/events/rooms/clark.html";
$events_room4 = "/events/rooms/edr.html";
$events_room5 = "/events/rooms/garden.html";
$events_room6 = "/events/rooms/great.html";
$events_room7 = "/events/rooms/john.html";
$events_room8 = "/events/rooms/krutch.html";
$events_room9 = "/events/rooms/newel.html";

$events_policies_catering = "/events/policies/catering.html";
$events_policies_other = "/events/policies/other.html";
$events_policies_payment = "/events/policies/payment.html";
$events_policies_reservation = "/events/policies/reservation.html";
$events_policies_cancellation = "/events/policies/cancellation.html";

$events_faq_catering = "/events/faq/catering.html";
$events_faq_events = "/events/faq/events.html";

/* to-go pages */
$delivery_index = "/delivery/index.html";
$delivery_faq = "/delivery/faq.html";
$delivery_menus = "/delivery/menus.html";
$delivery_service = "/delivery/service/services.html";
$delivery_eatwell = "/delivery/service/eatwell.html";
$delivery_photo = "/delivery/photo.html";
$delivery_about = "/delivery/about_boudin.html";

$delivery_policies_ordering = "/delivery/policies/ordering.html";
$delivery_policies_order = "/delivery/policies/order.html";
$delivery_policies_payment = "/delivery/policies/payment.html";
$delivery_policies_delivery = "/delivery/policies/delivery.html";
$delivery_policies_cancellation = "/delivery/policies/cancellation.html";

$delivery_menu1 ="/delivery/menus/desserts.html";
$delivery_menu2 ="/delivery/menus/allday.html";
$delivery_menu3 ="/delivery/menus/entertaining.html";
$delivery_menu4 ="/delivery/menus/soup_salad.html";
$delivery_menu5 ="/delivery/menus/make_meal.html";
$delivery_menu6 ="/delivery/menus/sandwich.html";
$delivery_menu7 ="/delivery/menus/breakfast.html";
$delivery_menu8 ="/delivery/menus/box_meal.html";
$delivery_menu9 ="/delivery/menus/beverages.html";

/* paste this code in locations 

<!-- summerhours php -->
<?php include 'includes/summerhour.php'; ?>
<!-- end summerhours php -->
 <?php print $url; ?> 
*/

/* paste this code in locations 

<!-- summerhours php -->
<?php include 'includes/summerhour.php'; ?>
<!-- end summerhours php -->
print $url;
*/

 if ($url == $newsletter) 
  {  /* newsletter */
	?>	
   
    <title>Cal Catering - Newsletter </title>
    </head>
	<body>
    <?
    }
	
 if ($url == $contact) 
  { /* contact page */
	?> 
    <title>Cal Catering - Contact</title>
    </head>
	<body>
    <?
    }

	 if ($url == $getting_here) 
  { /* getting here */
	?> 
    <title>Cal Catering - Getting to  Clark Kerr Campus</title>
    </head>
	<body>
    <?
    }
	if ($url == $book_event) 
	 { /* book event */
	?> 
    <title>Cal Catering - Booking an Event</title>
    </head>
	<body>
    <?
    }
	if ($url == $events_index) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_faq) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering FAQ</title>
    </head>
	<body>
    <?
    }
	
	else if ($url == $events_service) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Services</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_service_index) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Services</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_service_space) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Services </title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_service_audio) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Services Audio/Visual </title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_service_planning) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Services Planning </title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_service_rentals) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Services Room Rentals </title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_service_support) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Support Services  </title>
    </head>
	<body>
    <?
    }
else if ($url == $events_service_history ) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - History of Clark Kerr  </title>
    </head>
	<body>
    <?
    }

	else if ($url == $events_policies) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Policies</title>
    </head>
	<body>
    <?
    }
	
	else if ($url == $events_space) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Event Space</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_audio) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Audio Visual Equipment / Other equipments</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_photo1) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Photo Gallery</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_photo2) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Photo Gallery</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room1) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Room Sargent Clark</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room2) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Room Warring Wilkinson</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room3) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Clark Kerr Room</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room4) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Executive Dining Room</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room5) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Garden Room & Patio</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room6) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Great Hall</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room7) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering John Kearney Room</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room8) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Krutch Theatre</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_room9) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Room Sargent Clark</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_menu1) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Appetizers</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_menu2) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Beverages</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_menu3) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Boxed Lunches</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_menu4) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Breakfast</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_menu5) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Desserts</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_menu6) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Create-Your-Own-Buffets</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_menu7) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Snacks</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_menu8) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Events & Catering Theme Buffets</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_policies_catering) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Catering</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_policies_other) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Other</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_policies_payment) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Payment</title>
    </head>
	<body>
    <?
    }
	else if ($url == $events_policies_reservation) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Reservation</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_index) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_faq) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery FAQ</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menus) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menus</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_service) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Services</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_eatwell) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Eat Well Berkeley</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_photo) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Photo Gallery</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_about) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - About Boudin</title>
    </head>
	<body>
    <?
    }
		else if ($url == $delivery_policies) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Policies</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu1) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - Desserts</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu2) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - All Day Agenda</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu3) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - Entertaining</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu4) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - Soup & Salad</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu5) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - Make it a Meal</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu6) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - Sandwich Selections</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu7) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - Breakfast</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu8) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - Box Meals</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_policies_Ordering) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Ordering</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_policies_order) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Your Order</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_policies_payment) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Payment and Cancellation</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_cancellation_delivery) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Cancellation</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_policies_delivery) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Policies: Delivery</title>
    </head>
	<body>
    <?
    }
	else if ($url == $delivery_menu9) 
	 { /* events service gallery 2*/
	?> 
    <title>Cal Catering - Delivery Menu - Beverages</title>
    </head>
	<body>
    <?
    }
 	?>
<div class="overall_wrap">
<div class="navbar-wrapper">
 <div class="container">
	<div class="navbar">
    <div class="email_news">
			<div id="mc_embed_signup">
<form action="http://berkeley.us2.list-manage1.com/subscribe/post?u=0ceafbe959e1d6d718a73af74&amp;id=01a4f5f9e3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<div class="newsletter_wrap">Newsletter</div>

<div class="mc-field-group newsletter_wrap">
	

	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email">
</div>
	<div class="newsletter_wrap"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

    </div>
	<div class="head_menu">
    	<ul>
        	
            <li><a href="http://test-catering.housing.berkeley.edu/book_event.html">book an event</a></li>
            <li><a href="http://test-catering.housing.berkeley.edu/getting_here/ckc.html">getting here</a></li>
            <li><a href="http://test-catering.housing.berkeley.edu/contact.html" class="last">contact</a></li>
        </ul>   
    </div>
    </div>
</div>
</div>

<div class="contbody-wrapper">

<div class="intro_menu_wrapper2">

<div class="container item_menu">
    		<div class="front_logo small_logo"><a href="http://test-catering.housing.berkeley.edu/"><img src="http://test-catering.housing.berkeley.edu/img/calcatering_logo_w.png" /></a></div>
        	<div class="menu_group">
            
            <?php 
			if (in_array( $url, $main_pages )) { 
		 	?>
        
				
             <div class="menu_delivery" >
            <a href="http://test-catering.housing.berkeley.edu/delivery/" title="delivery">
            	<div class="menu_cms_logo roll_show1 small_logo">
                </div>
              </a>  
            </div>
             
            <div class="menu_full">
            <a href="http://test-catering.housing.berkeley.edu/events/" title="full">
            	<div class="menu_full_logo roll_show2 small_logo">
                </div>
                </a>
               
            </div>   
                
				<? 
				goto end;
				} 
			else 	
			
			
			if (in_array( $url, $delivery_pages )) { 
		 	?><div class="menu_delivery" >
            <a href="http://test-catering.housing.berkeley.edu/delivery/" title="delivery">
            	<div class="menu_cms_logo roll_show1 small_logo">
                </div>
              </a>  
            </div><? } 
			else { ?><div class="menu_delivery" >
            <a href="http://test-catering.housing.berkeley.edu/delivery/" title="delivery">
            	<div class="menu_cms_logo roll_show1 small_logo active">
                </div>
              </a>  
            </div><? } 
			
			if (in_array( $url, $events_pages )) { 
		 	?>
            <div class="menu_full">
            <a href="http://test-catering.housing.berkeley.edu/events/" title="full">
            	<div class="menu_full_logo roll_show2 small_logo">
                </div>
                </a>
               
            </div><? } 
			else { ?>
            <div class="menu_full">
            <a href="http://test-catering.housing.berkeley.edu/events/" title="full">
            	<div class="menu_full_logo roll_show2 small_logo active">
                </div>
                </a>
               
            </div><? } 
			end:
			?>
        	
            
        </div>
        </div>
</div>

<div class="container shadow_wrap">
<div class="container homepage">

<?php 
			if (in_array( $url, $main_pages )) { 
		 	?>
            <div id="myCarousel" class="carousel slide">
 				<ol class="carousel-indicators">
    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    				<li data-target="#myCarousel" data-slide-to="1"></li>
    				<li data-target="#myCarousel" data-slide-to="2"></li>
  				</ol>
  
  			<!-- Carousel items -->
  				<div class="carousel-inner">
    				<div class=" item">
                    	<img src="http://test-catering.housing.berkeley.edu/img/slide/slide1.jpg" />
                        <div class="carousel-caption">
                      <h4>FIND US AND GET IN TOUCH</h4>
                      <p>Ready to plan your next event? Get in touch with a Cal Catering events coordinator today!</p>
                      
                    </div>
                    <div class="clear_block"></div>
                    </div>
    				<div class="active item"><img src="http://test-catering.housing.berkeley.edu/img/slide/slide2.jpg" /> <div class="carousel-caption">
                      <h4>FIND US AND GET IN TOUCH</h4>
                      <p>Ready to plan your next event? Get in touch with a Cal Catering events coordinator today!</p>
                      
                    </div> <div class="clear_block"></div>
                    </div>
    				<div class="item"><img src="http://test-catering.housing.berkeley.edu/img/slide/slide3.jpg" /> <div class="carousel-caption">
                      <h4>FIND US AND GET IN TOUCH</h4>
                      <p>Ready to plan your next event? Get in touch with a Cal Catering events coordinator today!</p>
                      
                    </div> <div class="clear_block"></div>
                    </div>
  				</div>
  			<!-- Carousel nav -->
  				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div> 
                
				<? 
				
				}
			
			else if (in_array( $url, $events_pages )) { 
		 	?>
            <div id="myCarousel" class="carousel slide">
 				<ol class="carousel-indicators">
    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    				<li data-target="#myCarousel" data-slide-to="1"></li>
    				<li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
    				<li data-target="#myCarousel" data-slide-to="4"></li>
  				</ol>
  
  			<!-- Carousel items -->
  				<div class="carousel-inner">
    				<div class="active item"><img src="http://test-catering.housing.berkeley.edu/img/slide/full_banners5.jpg" /> <div class="carousel-caption">
                      <h4>BRING YOUR EVENTS TO LIFE</h4>
                      <p>Whether you need breakfast for a simple meeting or full-service event planning for a  big event, Cal Catering can provide everything you need to have the best event possible.</p>
                      
                    </div> <div class="clear_block"></div>
                    </div>
                    
    				<div class="item"><img src="http://test-catering.housing.berkeley.edu/img/slide/full_banners2.jpg" /> <div class="carousel-caption">
                      <h4>BRING YOUR EVENTS TO LIFE</h4>
                      <p>Whether you need breakfast for a simple meeting or full-service event planning for a  big event, Cal Catering can provide everything you need to have the best event possible.</p>
                      
                    </div> <div class="clear_block"></div>
                    </div>
                    
                    <div class="item"><img src="http://test-catering.housing.berkeley.edu/img/slide/full_banners3.jpg" /> <div class="carousel-caption">
                      <h4>BRING YOUR EVENTS TO LIFE</h4>
                      <p>Whether you need breakfast for a simple meeting or full-service event planning for a  big event, Cal Catering can provide everything you need to have the best event possible.</p>
                      
                    </div> <div class="clear_block"></div>
                    </div>
                    
                    <div class="item"><img src="http://test-catering.housing.berkeley.edu/img/slide/full_banners4.jpg" /> <div class="carousel-caption">
                      <h4>BRING YOUR EVENTS TO LIFE</h4>
                      <p>Whether you need breakfast for a simple meeting or full-service event planning for a  big event, Cal Catering can provide everything you need to have the best event possible. </p>
                      
                    </div> <div class="clear_block"></div>
                    </div>
    				
                    <div class="item"><img src="http://test-catering.housing.berkeley.edu/img/slide/full_banners1.jpg" />
                        <div class="carousel-caption">
                      <h4>BRING YOUR EVENTS TO LIFE</h4>
                      <p>Whether you need breakfast for a simple meeting or full-service event planning for a  big event, Cal Catering can provide everything you need to have the best event possible.</p>
                      
                    </div>
                    <div class="clear_block"></div>
                    </div>
  				</div>
  			<!-- Carousel nav -->
  				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div> 
                
				<? 
				
				}
			
			
				
			else if (in_array( $url, $delivery_pages )) { 
		 	?>
            <div id="myCarousel" class="carousel slide">
 				<ol class="carousel-indicators">
    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    				<li data-target="#myCarousel" data-slide-to="1"></li>
    				<li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
  				</ol>
  
  			<!-- Carousel items -->
  				<div class="carousel-inner">
    				 <div class="item">
                    	<img src="http://test-catering.housing.berkeley.edu/img/slide/togo_banners1.jpg" />
                        <div class="carousel-caption">
                      <h4>Cal Catering features Boudin</h4>
                      <p>Boudin now delivers fresh everyday on campus. Enjoy over 160 years of Boudin culinary tradition at your events of any size.</p></div>
                    <div class="clear_block"></div>
                    </div>
                    
                    
    				 <div class="item"><img src="http://test-catering.housing.berkeley.edu/img/slide/togo_banners2.jpg" /> <div class="carousel-caption">
                      <h4>Cal Catering features Boudin</h4>
                      <p>Boudin now delivers fresh everyday on campus. Enjoy over 160 years of Boudin culinary tradition at your events of any size.</p>
                    </div> <div class="clear_block"></div>
                    </div>
                    
                     <div class="active item"><img src="http://test-catering.housing.berkeley.edu/img/slide/togo_banners3.jpg" /> <div class="carousel-caption">
                      <h4>Cal Catering features Boudin</h4>
                      <p>Boudin now delivers fresh everyday on campus. Enjoy over 160 years of Boudin culinary tradition at your events of any size.</p>
                    </div> <div class="clear_block"></div>
                    </div>
                    
                     <div class="item"><img src="http://test-catering.housing.berkeley.edu/img/slide/togo_banners5.jpg" /> <div class="carousel-caption">
                      <h4>Cal Catering features Boudin</h4>
                      <p>Boudin now delivers fresh everyday on campus. Enjoy over 160 years of Boudin culinary tradition at your events of any size.</p>
                    </div> <div class="clear_block"></div>
                    </div>
                    
                     <div class="item"><img src="http://test-catering.housing.berkeley.edu/img/slide/togo_banners4.jpg" /> <div class="carousel-caption">
                      <h4>Cal Catering features Boudin</h4>
                      <p>Boudin now delivers fresh everyday on campus. Enjoy over 160 years of Boudin culinary tradition at your events of any size.</p>
                    </div> <div class="clear_block"></div>
                    </div>
                    
                    
                    
                    
  				</div>
  			<!-- Carousel nav -->
  				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div> 
                
				<? 
				
				};
				


?> 

</div>
