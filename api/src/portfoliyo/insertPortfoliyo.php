<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../../config/database.php';
  
// instantiate reg object
include_once '../../object/Portfolyo.php';
  
$database = new Database();
$db = $database->getConnection();
  
$portfoliyo = new Portfoliyo($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
//print_r($data);  
// make sure data is not empty
if(
    true
    // !empty($data->clientName) &&
    // !empty($data->clientMoble)
)

{
    $portfoliyo->clientName = $data->clientName;
    $portfoliyo->clientMoble = $data->clientMoble;
    $portfoliyo->clientLogoTitle = $data->clientLogoTitle;
    $portfoliyo->clientUrl = $data->clientUrl;
    $portfoliyo->clientComment = $data->clientComment;
    $portfoliyo->clientPhoto = $data->clientPhoto;
    $portfoliyo->clientLogo = $data->clientLogo;
    $portfoliyo->status = $data->status;
    $portfoliyo->createdBy = $data->createdBy;
    $portfoliyo->createdOn = $data->createdOn;
       
    //var_dump($exam);
    // create the reg
    if($portfoliyo->insertPortfoliyo()){

        http_response_code(201);
        echo json_encode(array("message"=>"Successfull"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to insert portfolyo record"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to insert portfolyo record. Data is incomplete."));
}
?>