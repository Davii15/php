<?php
$session_id = $_POST["session_id"];
$service_code = $_POST["service_code"];
$phonenumber = $_POST["phonenumber"];
$test  = $_POST["test"];

if ($test ==" "){
$response = "CON  What would you want to check \n";
$response = "1 . My Account No ";
$response = "2 . My Phone Number";
}
else if ($test == "1"){
$response = "CON  choose the account information you want to view \n";
$response = "1 . Account Number";
$response = "2 . Account Balance";
}
else if ($test == "2"){
$response = "END Your Phone number is". $phonenumber ;
}
else if($test == "1*1"){
$account_number = "ac4041";
$response = "END Your account number is". $account_number;
}
else if($test == "1*2" ){
$account_balance = 34000;
$response = "END Your account balance is ". $account_balance ;
}

header(" Content type : text/plain");
echo $response ;
?>
