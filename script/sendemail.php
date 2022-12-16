 <?php
         include "../constant.php";

         $serviceName = $_POST['serviceName'];
         $clientName = $_POST['clientName'];
         $mobile = $_POST['mobile'];
         $email = $_POST['email'];
         $address = $_POST['address'];
         $clientMessage = $_POST['clientMessage'];
         $date = date('d-m-Y');
         $createdOn = strtotime($date);
         $createdBy = $_POST['clientName'];

         $url = $URL."inquiry/inquiryEntry.php";

         $data = array(
            "serviceName"=>$serviceName,
            "clientName"=>$clientName,
            "mobile"=>$mobile,
            "email"=>$email,
            "address"=>$address,
            "clientMessage"=>$clientMessage,
            "createdOn"=>$createdOn,
            "createdBy"=>$createdBy
         );

         //print_r($data);

        $postdata = json_encode($data);
        $client= curl_init($url);
        curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);
        //print_r($response);    
        $result = json_decode($response);
        //print_r($result);

        if($result->message=="Successfull"){

          $msg = "Data inserted Successfully";

         $to = $email;
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:glintelindia@gmail.com \r\n";
         $header .= "Cc:glintelindia@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            $msg = "Message sent successfully...";
         }else {
            $msg = "Message could not be sent...";
         }

         header('location:../index.php?'.$msg); 

        }else{
         echo "Data nor insert please check the api";
        }   

         
?>
