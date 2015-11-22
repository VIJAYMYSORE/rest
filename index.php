<?php
require_once( './conf/config.php');

$app = new \Slim\Slim();
$app->get('/foo', function () {
    echo "Foo!";
});
$app->run();