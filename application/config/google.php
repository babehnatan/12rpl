<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
/*$client_id ="238833512139-6njgkce1bueol592edg2j982lrgdv02j.apps.googleusercontent.com";
$client_secret = "D_NMgyjlpDuWgeHQGLtgKo21";
$redirect_uri = "http://localhost/klinik/register/google";*/


$client_id ="238833512139-6njgkce1bueol592edg2j982lrgdv02j.apps.googleusercontent.com";
$client_secret = "D_NMgyjlpDuWgeHQGLtgKo21";
$redirect_uri = "http://localhost/sidokter.id/usermobile/home/google";


$client_id2 ="238833512139-fam0u571vhucbmljg6njj3i8d8jr2e0i.apps.googleusercontent.com";
$client_secret2 = "uz_NKf7A4lQVSGWz_ihQQWC7";
$redirect_uri2 = "https://klinik.sidokter.id/register/google";

$config['googleplus']['client_id']        = $client_id;
$config['googleplus']['client_secret']    = $client_secret;
$config['googleplus']['redirect_uri']     = $redirect_uri;
$config['googleplus']['application_name'] = 'Klinik';
$config['googleplus']['api_key']          = '';
$config['googleplus']['scopes']           = array();