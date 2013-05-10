<?php
require_once realpath(__DIR__ . '/vendor/autoload.php');

ORM::configure('mysql:host=localhost;dbname=komuri_portfolio');
ORM::configure(array(
    'username' => 'root',
    'password' => '',
));

$portfolio = ORM::for_table('portfolio')->find_array();

$mustache = new Mustache_Engine(array(
    'cache'           => dirname(__FILE__) . '/tmp/cache/mustache',
    'cache_file_mode' => 0666,
    'loader'          => new Mustache_Loader_FilesystemLoader(__DIR__ . '/views'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(__DIR__ . '/views/partials'),
));

$data['portfolio'] = $portfolio;

echo $mustache->render('template', $data);
