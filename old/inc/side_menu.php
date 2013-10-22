<div class="span2 sidebar_menu">

<!-- events page  menu  -->
	<?php if (in_array( $url, $events_pages )) { 
		 	?>
	<ul class="nav nav-pills nav-stacked">
    <!-- begin main page menus -->
  		<?php if (in_array( $url, $events_menu_pages )) { 
		 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/breakfast.html">menus</a></li>
        			
                    <ul class="nav nav-pills nav-stacked inside" style="display:block">
            	 <?php if ($url == $events_menu4) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/breakfast.html">Breakfast</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/breakfast.html">Breakfast</a></li> <? } ?>
    			<?php if ($url == $events_menu3) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/box_meal.html">boxed lunches</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/box_meal.html">boxed lunches</a></li> <? } ?>
                
                <?php if ($url == $events_menu6) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/make_meal.html">Create-Your-Own-Buffets</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/make_meal.html">Create-Your-Own-Buffets</a></li> <? } ?>
                 <?php if ($url == $events_menu8) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/theme.html">Theme Buffets</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/theme.html">Theme Buffets</a></li> <? } ?>
                 <?php if ($url == $events_menu7) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/snacks.html">Snacks</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/snacks.html">Snacks</a></li> <? } ?>
                 <?php if ($url == $events_menu1) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/appetizers.html">Appetizers</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/appetizers.html">Appetizers</a></li> <? } ?>   
                  <?php if ($url == $events_menu5) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/desserts.html">Desserts</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/desserts.html">Desserts</a></li> <? } ?> 
                         <?php if ($url == $events_menu2) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/beverages.html">Beverages</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/beverages.html">Beverages</a></li> <? } ?> 
                        
                         <?php if ($url == $events_menu9) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/menus/holiday2013.html">Holiday 2013</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/holiday2013.html">Holiday 2013</a></li> <? } ?> 
					
                    </ul> 
		
		
		<? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/menus/breakfast.html">menus</a></li> <? } ?>
        
        <?php if (in_array( $url, $events_service_pages )) { 
		 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/services/services.html">services</a></li>
		 	<ul class="nav nav-pills nav-stacked inside" style="display:block">
            
            	 <?php if ($url == $events_service_audio) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/services/audio.html">audio / visual</a></li><? } 
				else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/services/audio.html">audio / visual</a></li> <? } ?>
                
                   <?php if ($url == $events_service_planning) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/services/event_planning.html">event planning</a></li><? } 
				else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/services/event_planning.html">event planning</a></li> <? } ?>
            	 
				
                 <?php if ($url == $events_service_rentals) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/services/room_rentals.html">room rentals</a></li><? } 
				else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/services/room_rentals.html">room rentals</a></li> <? } ?>
                
              
            	<?php if ($url == $events_service_support) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/services/support_services.html">support services</a></li><? } 
				else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/services/support_services.html">support services</a></li> <? } ?>
           
            
            <?php if ($url == $events_service_eatwell) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/services/eatwell.html">eat well berkeley</a></li><? } 
				else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/services/eatwell.html">eat well berkeley</a></li> <? } ?>
            </ul>
		 <? } 
		 
		 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/services/services.html">services</a></li> <? } ?>
  	
     <?php if (in_array( $url, $events_room_pages )) {
  		?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/event_space.html">event spaces</a></li>
        	<ul class="nav nav-pills nav-stacked inside" style="display:block">
            	 <?php if ($url == $events_room3) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/rooms/clark.html">clark kerr</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/rooms/clark.html">clark kerr</a></li> <? } ?>
    			<?php if ($url == $events_room9) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/rooms/newel.html">newel perry</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/rooms/newel.html">newel perry</a></li> <? } ?>
                
                <?php if ($url == $events_room1) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/rooms/sargent.html">Sargent Johnson</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/rooms/sargent.html">Sargent Johnson</a></li> <? } ?>
                 <?php if ($url == $events_room2) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/rooms/warring.html">Warring Wilkinson</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/rooms/warring.html">Warring Wilkinson</a></li> <? } ?>
              
                 <?php if ($url == $events_room4) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/rooms/edr.html">executive dining room</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/rooms/edr.html">executive dining room</a></li> <? } ?>   
                             <?php if ($url == $events_room8) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/rooms/krutch.html">krutch theatre</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/rooms/krutch.html">krutch theatre</a></li> <? } ?>  
                  <?php if ($url == $events_room5) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/rooms/garden.html">garden room & patio</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/rooms/garden.html">garden room & patio</a></li> <? } ?>  
                 <?php if ($url == $events_room6) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/rooms/great.html">great hall</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/rooms/great.html">great hall</a></li> <? } ?>  
                
            </ul> <? }
		else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/event_space.html">event spaces</a></li> <? } ?>
        	
         <?php if ($url == $events_photo1) { 
		 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/photo/gallery1.html">photos</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/photo/gallery1.html">photos</a></li> <? } ?>
        	
         <?php if (in_array( $url, $events_policies_pages)) { 
		 	
			?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/policies/catering.html">policies</a></li>
			<ul class="nav nav-pills nav-stacked inside" style="display:block">
            	 <?php if ($url == $events_policies_catering) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/policies/catering.html">Catering</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/policies/catering.html">Catering</a></li> <? } ?>
    			 <?php if ($url == $events_policies_reservation) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/policies/reservation.html">Reservations</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/policies/reservation.html">Reservations</a></li> <? } ?>
    
     <?php if ($url == $events_policies_cancellation) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/policies/cancellation.html">cancellations</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/policies/cancellation.html">cancellations</a></li> <? } ?>
    
    			<?php if ($url == $events_policies_payment) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/policies/payment.html">Payment</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/policies/payment.html">Payment</a></li> <? } ?>
    			<?php if ($url == $events_policies_other) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/policies/other.html">Other</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/policies/other.html">Other</a></li> <? } ?>
                
            </ul><? } 
	
				else { 
			
			?> <li><a href="http://test-catering.housing.berkeley.edu/events/policies/catering.html">policies</a></li> <? } ?>
      
	  	
  <?php if (in_array( $url, $events_faq_pages )) { 
		 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/faq/events.html">faq</a></li>
		 	<ul class="nav nav-pills nav-stacked inside" style="display:block">
            	 <?php if ($url == $events_faq_events) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/faq/events.html">Events</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/faq/events.html">Events</a></li> <? } ?>
    			  <?php if ($url == $events_faq_catering) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/faq/catering.html">catering</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/faq/catering.html">catering</a></li> <? } ?>
             
            </ul>
		 <? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/faq/events.html">faq</a></li> <? } ?>
    
       <?php if ($url == $events_service_history) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/events/services/history.html">History of clark kerr</a></li><? } 
				else { ?> <li><a href="http://test-catering.housing.berkeley.edu/events/services/history.html">History of clark kerr</a></li> <? } ?> 
	</ul> 
    
	<?
	
	}?>
    

    
<!-- delivery page  menu  -->
	<?php if (in_array( $url, $delivery_pages )) { 
		 	?>
	<ul class="nav nav-pills nav-stacked">
    <!-- begin main page menus -->
  				<?php if (in_array( $url, $delivery_menu_pages )) { 
		 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/breakfast.html">menus</a></li>
        			
                    <ul class="nav nav-pills nav-stacked inside" style="display:block">
            	 <?php if ($url == $delivery_menu7) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/breakfast.html">Breakfast</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/breakfast.html">Breakfast</a></li> <? } ?>
    			<?php if ($url == $delivery_menu8) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/box_meal.html">box meals</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/box_meal.html">box meals</a></li> <? } ?>
                
                <?php if ($url == $delivery_menu6) { 
				 	?>
                <li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/sandwich.html">sandwiches</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/sandwich.html">sandwiches</a></li> <? } ?>
                 <?php if ($url == $delivery_menu5) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/make_meal.html">make it a meal</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/make_meal.html">make it a meal</a></li> <? } ?>
                 <?php if ($url == $delivery_menu4) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/soup_salad.html">soup & salad</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/soup_salad.html">soup & salad</a></li> <? } ?>
                 <?php if ($url == $delivery_menu3) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/entertaining.html">entertaining</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/entertaining.html">entertaining</a></li> <? } ?>   
                             <?php if ($url == $delivery_menu2) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/allday.html">all day agenda</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/allday.html">all day agenda</a></li> <? } ?> 
                         <?php if ($url == $delivery_menu1) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/desserts.html">desserts</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/desserts.html">desserts</a></li> <? } ?> 
                        
                        <?php if ($url == $delivery_menu9) { 
				 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/menus/beverages.html">beverages</a></li><? } 
						else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/beverages.html">beverages</a></li> <? } ?> 
                          
                 
                
            </ul> 
		
		
		<? } 
		
	
	
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/menus/breakfast.html">menus</a></li> <? } ?>
    
    
    <?php if (in_array( $url, $delivery_service_pages )) { 
		 	?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/service/services.html">services</a></li>
		 	<ul class="nav nav-pills nav-stacked inside" style="display:block">
            	 <?php if ($url == $delivery_eatwell) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/service/eatwell.html">Eat Well berkeley</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/service/eatwell.html">Eat Well berkeley</a></li> <? } ?>
    			 
             
            </ul>
		 <? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/service/services.html">services</a></li> <? } ?>
    
    
    
    <?php if (in_array( $url, $delivery_policies_pages)) { 
		 	
			?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/policies/ordering.html">policies</a></li>
			<ul class="nav nav-pills nav-stacked inside" style="display:block">
            	 <?php if ($url == $delivery_policies_ordering) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/policies/ordering.html">Ordering</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/policies/ordering.html">Ordering</a></li> <? } ?>
    			
    			
    			<?php if ($url == $delivery_policies_delivery) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/policies/delivery.html">Delivery</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/policies/delivery.html">Delivery</a></li> <? } ?>
    <?php if ($url == $delivery_policies_payment) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/policies/payment.html">Payment</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/policies/payment.html">Payment</a></li> <? } ?>
     <?php if ($url == $delivery_policies_order) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/policies/cancellation.html">Cancellation</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/policies/cancellation.html">Cancellation</a></li> <? } ?>
                
            </ul><? } 
	
				else { 
			
			?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/policies/ordering.html">policies</a></li> <? } ?>
  	
  		<?php if ($url == $delivery_photo) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/photo.html">photos</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/photo.html">photos</a></li> <? } ?>
        
        <?php if ($url == $delivery_faq) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/faq.html">faq</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/faq.html">faq</a></li> <? } ?>
    
      <?php if ($url == $delivery_about) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/delivery/about_boudin.html">about boudin</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/delivery/about_boudin.html">about boudin</a></li> <? } ?>
     
	</ul>  <form action="https://calcateringtogo.catertrax.com/index.asp" target="_blank"> <input class="btn btn-primary btn-small" type="submit" value="Order"></form>
	<?
	}?>
    
<!-- main page  menu  -->
	<?php if (in_array( $url, $main_pages )) { 
		 	?>
	<ul class="nav nav-pills nav-stacked">
    <!-- begin main page menus -->
  		<?php if ($url == $book_event) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/book_event.html">Book an event</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/book_event.html">Book an event</a></li> <? } ?>
        
        <?php if ($url == $getting_here) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/getting_here/ckc.html">Getting here</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/getting_here/ckc.html">Getting here</a></li> <? } ?>
    
  	
  		<?php if ($url == $contact) { ?><li class="active"><a href="http://test-catering.housing.berkeley.edu/contact.html">contact</a></li><? } 
	else { ?> <li><a href="http://test-catering.housing.berkeley.edu/contact.html">contact</a></li> <? } ?>
        
    
       
	</ul> 
	<?
	}?>
</div>

	