<?php
require 'vendor/autoload.php';

use ClientConsumer\ConsumerImplementarController;
use Config\RouterResolver;

//initialize object from route resolver to use route system
$router = new RouterResolver();
//route for create shipment
$router->add('createShipment', 'ClientConsumer\ConsumerImplementor@executeCreateShipment');
//route for track shipment
$router->add('trackShipment', 'ClientConsumer\ConsumerImplementor@executetrackShipment');
$router->submit();