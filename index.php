<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/vendor/autoload.php';

use Josep\Phpmvcframework\core\Application;

$app = new Application();

//hello
$app->router->get('/', function(){
    return 'helloworld';
});
$app->router->get('/contact', function(){
    return 'contact';
});

$app->run();