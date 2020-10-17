<?php
require('vendor/autoload.php');

use Cocur\Slugify\Slugify;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$domain = $_ENV['DOMAIN'];
$cookie = $_ENV['COOKIE'];

$slugify = new Slugify();
$path = 'assets/webs/';
$url = urlencode($domain);
$file = $path . $slugify->slugify($url) . '.json';

if(!file_exists($file)) {
    // retrieve data from a domain and save
    $headers = array(
        'Accept' => 'application/json',
        'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        'cookie' =>  $cookie);
        $options = array('verify' => false);


    $data = array(
        'url' => $url,
        'mode' => 2,
        'count' => true);
    $request = Requests::post('https://webmeup.com/backlink/summary', $headers, $data, $options);
    file_put_contents($file, $request->body);
}

$decode = json_decode(file_get_contents($file),true);

//TopAnchors
$topAnchorsByBacklinks = $decode['topAnchorsByBacklinks']['line'];
$topAnchorsByDomains = $decode['topAnchorsByDomains']['line'];

include('html.php');