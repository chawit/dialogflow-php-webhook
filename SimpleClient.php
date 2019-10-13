<?php
$postData = file_get_contents("php://input");
$json_data = json_decode($postData, true);
$response = array(
    "source" => "From Fulfillment",
    "fulfillmentText"=> $json_data["responseId"]."Hello From php Server(You said ".$json_data["queryResult"]["queryText"].")",
    );
echo json_encode($response);
?>