<?php
//required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../../config/database.php';
  
// instantiate reg object
include_once '../../object/inquiry.php';
  
$database = new Database();
$db = $database->getConnection();
  
$inquiry = new Inquiry($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
//print_r($data);  
// make sure data is not empty
if(
    
    !empty($data->serviceName) &&
    !empty($data->clientName) &&
    !empty($data->email) &&
    !empty($data->mobile) 
  
)

{
    $inquiry->serviceName = $data->serviceName;
    $inquiry->clientName = $data->clientName;
    $inquiry->email = $data->email;
    $inquiry->address = $data->address;
    $inquiry->mobile = $data->mobile;
    $inquiry->message = $data->clientMessage;
    $inquiry->createdOn = $data->createdOn;
    $inquiry->createdBy = $data->createdBy;
       
    //var_dump($exam);
    // create the reg
    if($inquiry->inquiryEntry()){

        http_response_code(201);
        echo json_encode(array("message"=>"Successfull"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to insert inquiry table"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to inquiry table. Data is incomplete."));
}
?>