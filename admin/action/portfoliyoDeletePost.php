<?php

  if(isset($_POST['delete'])){

   
  include "../../constant.php";

  $id = $_POST['id'];

  $target_dir = "../images/portfoliyo/".$id;
  $target_photo = "../images/portfoliyo/".$id."/photo_".$id.".png";
  $target_logo = "../images/portfoliyo/".$id."/logo_".$id.".png";

  $url = $URL."portfoliyo/deletePortfoliyo.php";

  $data = array('id'=>$id);
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

   if(isset($target_photo)){
      unlink($target_photo);
      unlink($target_logo);
       //echo "deleted";

   }else{
   
    //echo "not deleted";

   }
   rmdir($target_dir);

   $msg = "Record deleted successfully";

   // $_SESSION['team_delete_post'] = $msg;

   header('location:../portfoliyoDetail.php');

  }else{

   $msg = "Record not deleted.";
   
   // $_SESSION['team_delete_post'] = $msg;

    header('location:../portfoliyoDetail.php');
  }

  }

?>