<meta http-equiv="refresh" content="0;url=https://toneradio.ga" />

<a>Application recieved! Redirecting you back to the home page.</a>

<?php
    $name = $_GET['name'];
    $age = $_GET['age'];
    $region = $_GET['region'];
    $role = $_GET['role'];
    $experience = $_GET['experience'];
    $why = $_GET['why'];
    $discord = $_GET['discord'];
    
    $data = array("content" => "@here \n\n:star2: **New Application** :star2: \n\nName: $name\nAge: $age\nRegion: $region\nRole: $role\nExperience: $experience\nWhy: $why\nDiscord: $discord\n","username" => "Tone | Applicaton Line");
    $curl = curl_init("https://discordapp.com/api/webhooks/598297410308931594/4GCZFCvc8y-PEJIv4V6Uf96DqEkuWsqGFkNsln77Fi-9Dbp-YhZLOUnGKjd5H91Gqhl-");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
?>

