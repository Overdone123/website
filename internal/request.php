<?php
    $name = $_GET['name'];
    $request = $_GET['request'];
    
    $data = array("content" => ":star2: **New Application** :star2: \n\nName: $name\nRequest: $request\n","username" => "Fresh | Request Line");
    $curl = curl_init("https://discordapp.com/api/webhooks/596975572022722594/qJbxmJ5dmp0Yr3b551OXIkVm7yhxMSxgCA4qn5i8N5ZpZVgZK4PGlyEgb01faWfN06YY");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
?>

