<?php
require 'vendor/autoload.php';

use Config\RouterResolver;
use ClientConsumer\HomeController;
$router = new RouterResolver();
$router->add('createShipment', 'ClientConsumer\HomeController@execute');
$router->submit();