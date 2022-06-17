<?php

use App\Models\M_token;
function akses_client($method, $url, $data)
{
    $client = \Config\Services::curlrequest();
    // $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1vaHN5YWhyaTEwQGdtYWlsLmNvbSIsImlhdCI6MTY1NTQxOTY5OSwiZXhwIjoxNjU1NDIzMjk5fQ.eD39IZISBeXtlCVlit1UpjNSzlzAx8iRx4uMkS_R818";

    $model = new M_token();
    $idToken = "1";
    $token = $model->getToken($idToken);
    $tokenPart = explode(".", $token);
    $payload = $tokenPart[1];
    $decode = base64_decode($payload);
    $json = json_decode($decode, true);
    $exp = $json['exp'];
    $now = time();

    if($exp <= $now)
    {
        $url = "http://localhost/restfulapi/auth";
        $form_params = [
            'email' => 'mohsyahri10@gmail.com',
            'password' => 'Letmeaccess'
        ];

        $response = $client->request('POST', $url, ['http_errors'=>false, 'form_params'=>$form_params]);
        $response = json_decode($response->getbody(), true);
        $token = $response['access_token'];
        $dataToken = [
            'id' => $idToken,
            'token' => $token
        ];
        $model->save($dataToken);
    }
    
    $headers = [
        'Authorization' => 'Bearer ' . $token
    ];

    $response = $client->request($method, $url, ['headers' => $headers, 'http_errors' => false, 'form_params' => $data]);
    return $response->getBody();
}