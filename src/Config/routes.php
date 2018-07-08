<?php
require 'vendor/autoload.php';

use ClientConsumer\ConsumerImplementarController;
use Config\RouterResolver;

//initialize object from route resolver to use route system
$router = new RouterResolver();
//route for create shipment
$router->add('create-shipment', 'ClientConsumer\ConsumerImplementor@executeCreateShipment');
//route for track shipment
$router->add('track-shipment', 'ClientConsumer\ConsumerImplementor@executetrackShipment');
$router->submit();