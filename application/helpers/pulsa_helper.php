
<?php
function baseapi($url, $postData = NULL)
{
    $token = @$_SESSION['token'];

    $ch         = curl_init($url);
    $headers    = array(
        'x-access-token:' . @$token,
        'Content-Type: application/json'
    );

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, @$postData);
    $result = json_decode(curl_exec($ch));
    curl_close($ch);
    return $result;
}