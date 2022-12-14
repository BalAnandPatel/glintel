<?php

   
  include "../../constant.php";

  $clientName = ucwords($_POST['clientName']);
  $clientMoble = $_POST['clientMoble'];
  $clientLogoTitle = $_POST['clientLogoTitle'];
  $clientUrl = $_POST['clientUrl'];
  $clientComment = ucfirst($_POST['clientComment']);
  $createdBy = "Admin";
  $status='1';
  $time=strtotime(date('Y-m-d H:i:s'));
  $clientPhoto = $clientName."_".$clientMoble.".png";
  $clientLogo = $clientName."_".$clientMoble."logo".".png";

  $url = $URL."portfoliyo/insertPortfoliyo.php";
  $url_read_maxId = $URL."portfoliyo/readMaxId.php";

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
  $portfoliyo_result=urlEncodeDecode($url,$postdata);
  //print_r($portfoliyo_result);

  if($portfoliyo_result->message=="Successfull"){

   /* --- get maximum userid -----*/

    $target_dir = "../images/portfoliyo/";
    $path="../images/portfoliyo/".$clientMoble;
    if (!is_dir($path)){
    mkdir($path, 0777, true);
     //echo "directory created";
    }
    else{ 
     //echo "unable to create directory";
    }

    $target_file_photo = $path ."/". $clientName."_".$clientMoble.".png";
    $target_file_logo = $path ."/". $clientName."_".$clientMoble."logo".".png";

    $uploadOk = 1;
    $imageFileTypePhoto = strtolower(pathinfo($target_file_photo,PATHINFO_EXTENSION));
    $imageFileTypeLogo = strtolower(pathinfo($target_file_logo,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
     $check_photo = getimagesize($_FILES["clientPhoto"]["tmp_name"]);
     $check_logo = getimagesize($_FILES["clientLogo"]["tmp_name"]);
     if($check_photo !== false && $check_logo !== false) {
        //echo "File is an image - ";
        $uploadOk = 1;
     } else {
        //echo "File is not an image.";
        $uploadOk = 0;
      }
    }


   // // Check if file already exists
   // if (file_exists($target_file_photo) || file_exists($target_file_logo) ){
   // echo $msg = "Sorry, file already exists.";
   // //$_SESSION['donation_post_error'] = $msg;
   // $uploadOk = 0;
   // }

  //Check file size
  if ($_FILES["clientPhoto"]["size"] > 5000000 || $_FILES["clientLogo"]["size"] > 5000000) {
  $msg = "Sorry, your file is too large.";
  //$_SESSION['donation_post_error'] = $msg;
  //header('Location:../ourWork.php');
  $uploadOk = 0;
  }

  
  // Allow certain file formats
  if($imageFileTypePhoto != "jpg" && $imageFileTypePhoto != "png" && $imageFileTypePhoto != "jpeg" && $imageFileTypeLogo != "jpg" && $imageFileTypeLogo != "png" && $imageFileTypeLogo != "jpeg") {
  $msg = "Sorry, only JPG, JPEG & PNG  files are allowed.";
  //$_SESSION['donation_post_error'] = $msg;
  //header('Location:../ourWork.php');
  $uploadOk = 0;
  }   


  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
  $msg = "Sorry, your file was not uploaded.";
  //header('Location:../ourWork.php');
  // if everything is ok, try to upload file
  } else {

  if (move_uploaded_file($_FILES["clientPhoto"]["tmp_name"], $target_file_photo) && 
   move_uploaded_file($_FILES["clientLogo"]["tmp_name"], $target_file_logo)) {

  $msg = "The file has been uploaded";

  //$_SESSION['donation_post'] = $msg;

  }else{
    $msg = "Sorry, there was an error uploading your file.";
  }
}
  header('Location:../portfoliyoEntry.php');

  }else{

   $msg = "portfoliyo data is not inserted";
   //header('Location:../ourWork.php');

  }


 function urlEncodeDecode($url,$postdata){

  $client= curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);
  //print_r($response);    
  return $result = json_decode($response);

 }




?>