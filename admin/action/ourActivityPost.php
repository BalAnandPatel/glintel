<?php

  include "../../constant.php";

  $title = strtoupper($_POST['title']);
  $description = ucfirst($_POST['description']);
  $createdBy = $_POST['title'];
  $time = strtotime(date('Y-m-d H:i:s'));


  $target_dir = "../images/activities/";

  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $image = $_FILES["image"]["name"];


  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
     $check = getimagesize($_FILES["image"]["tmp_name"]);
     if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
     } else {
        //echo "File is not an image.";
        $uploadOk = 0;
     }
   }

  // Check if file already exists
  if (file_exists($target_file)) {
  $msg = "Sorry, file already exists.";
  $_SESSION['activity_post_error'] = $msg;
  $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["image"]["size"] > 9000000) {
  $msg = "Sorry, your file is too large.";
  $_SESSION['activity_post_error'] = $msg;
  $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  $msg = "Sorry, only JPG, JPEG & PNG  files are allowed.";
  $_SESSION['activity_post_error'] = $msg;
  $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
  //echo "Sorry, your file was not uploaded.";
  header('Location:../ourActivity.php');
  // if everything is ok, try to upload file
  } else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

  $url = $URL."activity/ourActivityCreate.php";

  $data = array('title'=>$title, 'description'=>$description, 'image'=>$image, 'createdBy'=>$createdBy, 'createdOn'=>$time);
  //print_r($data);

  $postdata = json_encode($data);
  $client= curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);
  //print_r($response);    
  $result = json_decode($response);
  //print_r($result);


  $msg = "The file has been uploaded and ".$result->message;

  $_SESSION['our_activity_post'] = $msg;

  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  header('Location:../ourActivity.php');

 }

?>