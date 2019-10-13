<?php
$postData = file_get_contents("php://input");
$json_data = json_decode($postData, true);
$response = array(
    "source" => "Form Fulfillment",
    "fulfillmentText"=>"Hello World",
    );
echo json_encode($response);
?>