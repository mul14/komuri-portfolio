<?php
require_once '../bootstrap.php';

$portfolio = ORM::for_table('portfolio')->find_array();

$mustache = new Mustache_Engine(array(
    'cache'           => ROOT_DIR.'/tmp/cache/mustache',
    'cache_file_mode' => 0666,
    'loader'          => new Mustache_Loader_FilesystemLoader(ROOT_DIR.'/views'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(ROOT_DIR.'/views/partials'),
));

$data['portfolio'] = $portfolio;

echo $mustache->render('template', $data);
