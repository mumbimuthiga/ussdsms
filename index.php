<?php

include_once "menu.php";
//Calback URL :https://bb24-102-220-12-50.ngrok-free.app/ussdsms/index.php

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];
$isRegistered=false;

if($text=='' && $isRegistered){
    //Text is empty and user is not  registered
}else if($text== ''&& !$isRegistered){
    //Text is empty and user is registered
}else if($isRegistered){
    //Text is  not empty and user is not  registered
}else{
     //Text is  not empty and user is registered
}




?>