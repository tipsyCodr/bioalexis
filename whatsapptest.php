<?php

try {
    $postData = [
        "from_phone_number_id" => "448099781718817",
        "phone_number" => "919406037478",
        "template_name" => "payment_reminder",
        "template_language" => "en_US",
        "template_media_type" => "simple",
        "parameters" => "{1},{test},{31-08-2024}"
    ];

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://login.mart2meta.com/api/c8f008d4-462f-4520-8aff-8baf557d3464/contact/send-template',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($postData), // ✅ Proper JSON
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer A2TACHwwuJR5JMnHmAneCUzsjilI7YKgNdmB8ZWlkKMGbGQRk7ZshZ53quqSiNnp'
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        throw new Exception('Curl error: ' . curl_error($curl));
    }

    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpCode >= 200 && $httpCode < 300) {
        echo "Success: " . $response;
    } else {
        echo "Sent Body: " . json_encode($postData, JSON_PRETTY_PRINT) . "\n";
        echo "Response: " . $response . "\n";

        throw new Exception("HTTP Error Code: $httpCode. Response: $response");
    }
} catch (Exception $e) {
    
    echo "Failed: " . $e->getMessage();
}
