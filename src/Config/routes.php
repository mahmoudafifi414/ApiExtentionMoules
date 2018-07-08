<?php
require 'vendor/autoload.php';

use Config\RouterResolver;
use ClientConsumer\ConsumerImplementarController;
$router = new RouterResolver();
$router->add('createShipment', 'ClientConsumer\ConsumerImplementor@executeCreateShipment');
$router->add('createShipment', 'ClientConsumer\ConsumerImplementor@executetrackShipment');
$router->submit();