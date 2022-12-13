<?php

  if(isset($_POST['deleteActivity'])){
   
  include "../../constant.php";

  $activity_id = strtoupper($_POST['activity_id']);

  $target_dir = "../images/activities/";

  $filename = $_POST['activity_image'];

  $url = $URL."activity/ourActivityDelete.php";

  $data = array('activity_id'=>$activity_id);
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

   $_SESSION['activity_delete_post'] = $msg;

   header('location:../ourActivityDetail.php');

  }else{

   $msg = "Record not deleted.";
   header('location:../ourActivityDetail.php');
  }

  }

?>