<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require_once __DIR__ . "/vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $base_url = "k2kz53.api.infobip.com";
    $api_key = "76f4d5909a5cc1786c9ef911939b2c10-836b9c4a-5651-44c0-90fd-61c95c5b00c1"; // Replace with your Infobip API key

    $configuration = new Configuration([
        'host' => $base_url,
        'apiKey' => $api_key
    ]);

    $api = new SmsApi(new GuzzleHttp\Client(), $configuration);

    $destination = new SmsDestination([
        'to' => $phone
    ]);
    $message = new SmsTextualMessage([
        'from' => 'daveh',
        'destinations' => [$destination],
        'text' => $message
    ]);

    $requestBody = new SmsAdvancedTextualRequest([
        'messages' => [$message]
    ]);

    try {
        $response = $api->sendSmsMessage($requestBody);
        echo "Message sent successfully.";
    } catch (Exception $e) {
        echo "Message sending failed: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}

?>
