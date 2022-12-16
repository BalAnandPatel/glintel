<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// include database and object files


include_once '../../config/database.php';
include_once '../../object/adminLogin.php';
  

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$admin = new Admin($db);
  
// read products will be here
$data = json_decode(file_get_contents("php://input"));
//print_r($data);

$admin->userId=$data->userId; 
$admin->password=$data->password;

if(
    true
    // !empty($data->userId) &&
    // !empty($data->password) 
)
{

// query products
$stmt = $admin->adminLogin();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $admin_arr=array();
    $admin_arr["records"]=array();
  
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
       
        extract($row);
  
        $admin_item=array(
            "userId" => $userId,
            "password" => $password
        );
    
        array_push($admin_arr["records"], $admin_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($admin_arr);

}
  
// no products found will be here
else{
  
    // set response code - 404 Not found
    http_response_code(404);
    // tell the user no products found
    echo json_encode(array("message" => "login faild."));
}
}

?>