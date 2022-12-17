<?php
 include "../../constant.php";
 $url = $URL."adminLogin/adminLoginRead.php";

 $userId= $_POST["userId"];
 $password= $_POST["password"];
 $data = array( "userId"=>$userId, "password"=>$password);
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

 $user_id=$result->records[0]->userId;
 $pass=$result->records[0]->password;

 if($user_id && $pass == true){
 $_SESSION['login_post_success'] = "Welcome! to the dashboard";
 header('location:../dashboard.php');
 }else{
 $_SESSION['login_post_error'] = "Login faild! Please try again";
 header('location:../index.php');
}
 ?>