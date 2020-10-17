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
$file = $path . $slugify->slugify($url) . '.csv';

if (!file_exists($file)) {
    // retrieve data from a domain and save
    $headers = array(
        'Accept' => 'application/json',
        'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        'cookie' => $cookie);
    $options = array('verify' => false, 'timeout' => 3000);

        $data = array(
            'url' => $url,
            'mode' => 2,
            'count' => true,
            'perPage' => 50,
            'sort' => 'lastCheck',
            'sortAsc' => true
        );

    $request = Requests::post('https://webmeup.com/backlink/backlinks', $headers, $data, $options);

    $decode = json_decode($request->body, true);
    $arr_data = [['url', 'title', 'anchorUrl', 'anchorText', 'text', 'noFollow']];
    foreach ($decode['backlink']['backlink'] as $value) {
        if ($value !== null) {
            $arr_data[] = [
                $value['url'],
                $value['title'],
                $value['anchorUrl'],
                $value['anchorText'],
                $value['text'],
                $value['noFollow']
            ];
        }
    }

    $handle = fopen($file, 'a+');

    foreach ($arr_data as $fields) {
        fputcsv($handle, $fields);
    }
}
$csv = file_get_contents($file);
$array = array_map("str_getcsv", explode("\n", $csv));
echo json_encode($array);
