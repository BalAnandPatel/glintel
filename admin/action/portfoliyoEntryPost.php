<?php

  include "../../constant.php";

  $clientName = ucwords($_POST['clientName']);
  $clientMoble = $_POST['clientMoble'];
  $clientLogoTitle = $_POST['clientLogoTitle'];
  $clientUrl = $_POST['clientUrl'];
  $clientComment = ucfirst($_POST['clientComment']);
  $clientPhoto = $_FILES['clientPhoto']['name'];
  $clientLogo = $_FILES['clientLogo']['name'];
  $createdBy = "Admin";
  $status='1';
  $time=strtotime(date('Y-m-d H:i:s'));


  $url = $URL."portfoliyo/insertPortfoliyo.php";

  $data = array(
   'clientName'=>$clientName,
   'clientMoble'=>$clientMoble,
   'clientLogoTitle'=>$clientLogoTitle,
   'clientUrl'=>$clientUrl,
   'clientComment'=>$clientComment, 
   'clientPhoto'=>$clientPhoto,
   'clientLogo'=>$clientLogo,
   'status'=>$status,
   'createdBy'=>$createdBy, 
   'createdOn'=>$time
 );

  //print_r($data);

  $postdata = json_encode($data);
  $client= curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);
  //print_r($response);    
  $result = json_decode($response);
  print_r($result);

 //  $target_dir = "../images/team/";
  
 //  $target_file = $target_dir . $name."_".$mobile.".png";
 //  $image = $name."_".$mobile.".png";  

 //  $uploadOk = 1;
 //  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 //  // Check if image file is a actual image or fake image
 //  if(isset($_POST["submit"])) {
 //     $check = getimagesize($_FILES["image"]["tmp_name"]);
 //     if($check !== false) {
 //        //echo "File is an image - " . $check["mime"] . ".";
 //        $uploadOk = 1;
 //     } else {
 //        //echo "File is not an image.";
 //        $uploadOk = 0;
 //     }
 //   }

 //  // Check if file already exists
 //  if (file_exists($target_file)) {
 //  $msg = "Sorry, file already exists.";
 //  $msg = "Sorry, the team member already present.";
 //  $_SESSION['team_post_error'] = $msg;

 //  $uploadOk = 0;
 //  }

 //  // Allow certain file formats
 //  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
 //  $msg = "Sorry, only JPG, JPEG & PNG  files are allowed.";
 //  $_SESSION['team_post_error'] = $msg;
 //  $uploadOk = 0;
 //  }

 // // Check file size
 //  if ($_FILES["image"]["size"] > 9000000) {
 //  $msg = "Sorry, your file is too large.";
 //  $_SESSION['team_post_error'] = $msg;
 //  $uploadOk = 0;
 //  }

 //  // Check if $uploadOk is set to 0 by an error
 //  if ($uploadOk == 0) {
 //   //$msg = "Sorry, your file was not uploaded.";
 //  header('Location:../ourTeam.php');
 //  // if everything is ok, try to upload file
 //  } else {
 //  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {


 //  $msg = "The file has been uploaded. and ".$result->message;

 //  $_SESSION['team_post'] = $msg;

 //  } else {
 //    $msg = "Sorry, there was an error uploading your file.";
 //    $_SESSION['team_post_error'] = $msg;
 //  }

 //  header('Location:../ourTeam.php');

 // }

?>