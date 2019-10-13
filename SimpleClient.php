<?php
$postData = file_get_contents("php://input");
$json_data = json_decode($postData, true);
$responseText = "Hello From php Server(You said ".$json_data["queryResult"]["queryText"].")"."<br>Response ID:".$json_data["responseId"].
$response = array(
    "source" => "From Fulfillment",
    "fulfillmentText"=> ,
    );
echo json_encode($response);
?>