<?php

$mobile=$_POST['mob'];
$msg="This is text SMS fom glintelindia. To buy this service please contact 9984087027";

  $dharm_data = array(
  'user'=>'GIPLAD',
  'pass'=>'GIPLAD',
  'sender'=>'GIPLAD',
  'phone'=>$mobile,
    'text' => $msg, 
    'priority' => 'ndnd',
       'stype'=>'normal'
  );  
 
  $curl = curl_init();
 
  curl_setopt($curl, CURLOPT_POST, 1);
 
  curl_setopt($curl, CURLOPT_URL, 'http://bulksms.glintelindia.com/api/sendmsg.php/');  
  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  curl_setopt($curl, CURLOPT_POSTFIELDS, $dharm_data);
 
  $result = curl_exec($curl);
 
  curl_close($curl);
   
   
  //echo $result;
header('Location:../../sms.php');
?>