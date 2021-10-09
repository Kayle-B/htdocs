<?php
    $url = "https://api.simple-mmo.com/v1/worldboss/all";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
    "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $data = '{"api_key":"pM4oFCv4kioPtGDrFzQdwV5Qlw0AcZ5hKZWm6WixrFLB6F63LvhFVtLdh7BekMO49K8BwxfpOx3JiIjM"}';

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    echo $resp;
    die();

?>
