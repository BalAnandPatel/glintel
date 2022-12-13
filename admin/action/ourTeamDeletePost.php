<?php

  if(isset($_POST['teamDelete'])){

   
  include "../../constant.php";

  $team_id = strtoupper($_POST['team_id']);

  $target_dir = "../images/team/";

  $filename = $_POST['image'];

  //echo $target_dir;

  $url = $URL."team/ourTeamDelete.php";

  $data = array('team_id'=>$team_id);
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

   $_SESSION['team_delete_post'] = $msg;

   header('location:../ourTeamDetail.php');

  }else{

   $msg = "Record not deleted.";
   
   $_SESSION['team_delete_post'] = $msg;

   header('location:../ourTeamDetail.php');
  }

  }

?>