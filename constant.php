<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

$BASE_URL="http://localhost/glintel";
$URL=$BASE_URL."/api/src/";

$HOME="index.php";

$SECRET_KEY = "dKgLINTEL2013aN99840$@";  
$ISSUER_CLAIM = "GLINTEL TECHNOLOGY PVT LTD"; // this can be the servername
$AUDIENCE_CLAIM = "PSP NEWS";


$LOGIN_SUCCESS_MSG="Login Successful";
$LOGIN_FAILED_MSG="Request Failed";

?>