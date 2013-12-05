<?php
return array(
    /*
    |--------------------------------------------------------------------------
    | Google oauth2_client_id
    |--------------------------------------------------------------------------
    |
    | Visit https://code.google.com/apis/console?api=plus to generate your
    | oauth2_client_id, oauth2_client_secret, and to register your
    | oauth2_redirect_uri.
    |
    | Should be '*.apps.googleusercontent.com'
    |
    */
    'clientId' => '917280296785.apps.googleusercontent.com',
    /*
    |--------------------------------------------------------------------------
    | Google oauth2_client_secret
    |--------------------------------------------------------------------------
    */
    'clientSecret' => 'jeev04z9NjByi9B3y7xvP5_B',
    /*
    |--------------------------------------------------------------------------
    | Google oauth2_redirect_uri
    |--------------------------------------------------------------------------
    |
    | The default, URL::to('/'), will usually suffice - redirects the user to
    | your home page after a successful login
    |
    */
    //'redirectUri' => URL::to('/') . '/', // URL:to('/') doesn't include the trailing slash
    'redirectUri' => 'http://localhost/dashboard/public/projects/',
    /*
    |--------------------------------------------------------------------------
    | Google Developer Key
    |--------------------------------------------------------------------------
    */
    'developerKey' => 'AIzaSyCbpI6CvoKXOOzsUFUT810z_9sQiWADj98',
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | The Application Name to register with the Google API.
    |
    */
    'applicationName' => null,
);
