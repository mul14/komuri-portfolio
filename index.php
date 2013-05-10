<?php
require_once realpath(__DIR__ . '/vendor/autoload.php');
use \Symfony\Component\Yaml\Yaml as Yaml;

define('ENVIRONMENT', 'development');

$yaml     = new Yaml;
$dbconfig = $yaml->parse(file_get_contents(__DIR__ . '/phinx.yml'));
$dbconfig = $dbconfig['environments'][ENVIRONMENT];

$dsn = sprintf('%s:host=%s;port=%s;dbname=%s', $dbconfig['adapter'], $dbconfig['host'], $dbconfig['port'], $dbconfig['name']);

ORM::configure(array(
    'connection_string' => $dsn,
    'username'          => $dbconfig['user'],
    'password'          => $dbconfig['pass'],
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
