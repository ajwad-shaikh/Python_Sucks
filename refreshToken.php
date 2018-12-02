<?php

require_once __DIR__.'/vendor/autoload.php';

$provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => 'd74020c0568d69856f446551e8f3e9f4',    // The client ID assigned to you by the provider
    'clientSecret'            => 'aa561377b17a7c82f8b14ebe2d2f013a',   // The client password assigned to you by the provider
    'redirectUri'             => 'http://localhost/Python_Sucks/success.php',
    'urlAuthorize'            => 'https://api.codechef.com/oauth/authorize',
    'urlAccessToken'          => 'https://api.codechef.com/oauth/token',
    'urlResourceOwnerDetails' => 'http://brentertainment.com/oauth2/lockdin/resource'
]);

$existingAccessToken = getAccessTokenFromYourDataStore();

if ($existingAccessToken->hasExpired()) {
    $newAccessToken = $provider->getAccessToken('refresh_token', [
        'refresh_token' => $existingAccessToken->getRefreshToken()
    ]);

    // Purge old access token and store new access token to your data store.
}