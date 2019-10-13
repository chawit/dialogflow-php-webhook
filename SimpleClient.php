<?php
$postData = file_get_contents("php://input");
$json_data = json_decode($postData, true);
$responseText = "Hello From PHP Server(You said '".$json_data["queryResult"]["queryText"]."')"."\nResponse ID:".$json_data["responseId"];
$response = array(
    "fulfillmentText"=> $responseText
    );
echo json_encode($response);
?>