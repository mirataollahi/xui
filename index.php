<?php


//require psr 4 autoload from vendors
require __DIR__ .'/vendor/autoload.php';


use App\Application;


//create a new running application
$app = new Application();
$app->boot();