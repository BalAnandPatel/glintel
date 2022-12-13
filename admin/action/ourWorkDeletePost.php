<?php

  if(isset($_POST['workDelete'])){

   
  include "../../constant.php";

  $work_id = strtoupper($_POST['work_id']);

  $target_dir = "../images/work/";

  $filename = $_POST['work_image'];

  $url = $URL."ourWork/ourWorkDelete.php";

  $data = array('work_id'=>$work_id);
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

   $_SESSION['work_delete_post'] = $msg;

   header('location:../ourWorkDetail.php');

  }else{

   $msg = "Record not deleted.";
   header('location:../ourWorkDetail.php');
  }

  }

?>