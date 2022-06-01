<?php

use App\Models\M_auth;
//use CodeIgniter\Model;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function getJWT($authHeader)
{
    if(is_null($authHeader)) {
        throw new Exception("Autentikasi gagal");
    }
    return explode(" ", $authHeader)[1];
}

function validateJWT($encodedToken)
{
    $key = getenv('JWT_SECRET_KEY');
    $decodedToken = JWT::decode($encodedToken, new Key($key, 'HS256'));
    //$decodedToken = JWT::decode($encodedToken, $key, ['HS256']);
    $authModel = new M_auth();

    //xxx.xxxxx.xxxxxxx
    $authModel->getEmail($decodedToken->email);
}

function createJWT($email)
{
    $requestTime = time();
    $tokenTime = getenv('JWT_TIME_TO_LIVE');
    $expiredTime = $requestTime + $tokenTime;
    $payload = [
        'email' => $email,
        'iat' => $requestTime,
        'exp' => $expiredTime
    ];

    $jwt = JWT::encode($payload, getenv('JWT_SECRET_KEY'), 'HS256');
    return $jwt;
}