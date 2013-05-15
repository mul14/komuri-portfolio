<?php
define('ENVIRONMENT', 'development');
define('ROOT_DIR', realpath(__DIR__));

require_once ROOT_DIR.'/vendor/autoload.php';
use \Symfony\Component\Yaml\Yaml as Yaml;

$yaml     = new Yaml;
$dbconfig = $yaml->parse(file_get_contents(ROOT_DIR.'/phinx.yml'));
$dbconfig = $dbconfig['environments'][ENVIRONMENT];

$dsn = sprintf('%s:host=%s;port=%s;dbname=%s', $dbconfig['adapter'], $dbconfig['host'], $dbconfig['port'], $dbconfig['name']);

ORM::configure(array(
    'connection_string' => $dsn,
    'username'          => $dbconfig['user'],
    'password'          => $dbconfig['pass'],
));
