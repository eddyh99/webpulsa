
<?php
function baseapi($url, $postData = NULL,$idempotency=NULL)
{
    $apikey="pls_1124";
    $secret="z-jg?A*:VE.d84V";
    $token = sha1($_SERVER['SERVER_NAME'].$apikey.$secret);
    
    $ch     = curl_init($url);
    $headers    = array(
        'Authorization: Bearer ' . $token,
        'Content-Type: application/json',
        !empty($idempotency)?"X-IDEMPOTENCY-KEY:".$idempotency:""
    );

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    $result = json_decode(curl_exec($ch));
    curl_close($ch);
    return $result;
}