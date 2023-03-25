<?php

    error_reporting(E_ALL);

    $find_postcode = $_POST['postcode'];
    $find_distance = $_POST['distance'];

    

    //Miles to KM
    $radius = str_replace("Within ", "", $find_distance );
    $radius = str_replace(" miles", "", $radius);
    $radius = round(floatval($radius) * 1.60934, 1);


   

    //Format Postcode

    $postcode = str_replace(" ", "", strtoupper($find_postcode));


    //API 

    $curl = curl_init();

    $endpoint = "https://dargan.p.rapidapi.com/inradius?postcode=$postcode&radius=$radius";

    curl_setopt_array($curl, [
        CURLOPT_URL => $endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: dargan.p.rapidapi.com",
            "X-RapidAPI-Key: <Use your API KEY Here>"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $data = json_decode($response, true);
        foreach($data as $result){
            echo $result['Postcode'] . "\n";
        }
    }
