<?php

 include "../../constant.php";

 $url = $URL."userLogin/userLoginRead.php";

 $user_id= $_POST["user_id"];
 $password= $_POST["password"];
 $data = array( "user_id" =>$user_id, "password" =>$password);
 //print_r($data);
 $postdata = json_encode($data);
 $client = curl_init($url);

 curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
 curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0);
 curl_setopt($client, CURLOPT_POST, 5);
 curl_setopt($client,CURLOPT_RETURNTRANSFER, true);
 $response = curl_exec($client);
 //print_r($response);
 $result = json_decode($response);
 //print_r($result);


 if(!$result->message == "login faild."){
 $_SESSION['login_post_success'] = " Welcome! to the dashboard";
 header('location:../dashboard.php');
 }else{
 $_SESSION['login_post_error'] = $result->message;
 header('location:../index.php');
 }
 ?>