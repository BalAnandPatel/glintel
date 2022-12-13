<?php

  if(isset($_POST['Delete'])){
   
  include "../../constant.php";

  $event_id = $_POST['event_id'];

  $target_dir = "../images/events/";

  $filename = $_POST['event_image'];

  $url = $URL."events/ourEventsDelete.php";

  $data = array('event_id'=>$event_id);
  //print_r($data);

  $postdata = json_encode($data);
  $client= curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);
  //print_r($response);    
  $result = json_decode($response);
  //print_r($result);

  if($result->message == "Record has been deleted."){

   unlink($target_dir.$filename);

   $msg = "Record deleted successfully";

   $_SESSION['event_delete_post'] = $msg;

   header('location:../ourEventsDetail.php');

  }else{

   $msg = "Record not deleted.";
   header('location:../ourEventsDetail.php');
  }

  }

?>