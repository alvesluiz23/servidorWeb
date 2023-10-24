<html>
<head>
  <title> Ubuntu rocks! </title>
</head>
<body>
  
  <?php
  date_default_timezone_set('America/Los_Angeles');
  function get_client_ip() {
    
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
   }
  $date = date('m/d/Y h:i:s a', time());

  $timestamp = time();
  $currentDate = gmdate('Y-m-d', $timestamp);
  echo "ip ". get_client_ip(). "<br>";
  echo "Data e hora". $date;
  
  ?><br>
  
  
</body>
</html>
