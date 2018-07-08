<?php

namespace ClientConsumer;


use API\FirstAPI\FirstAPIController;

class ConsumerImplementor
{
    //some test for first API call at run time
    public function executeCreateShipment()
    {
        $firstController = new FirstAPIController();
        $instance = new ClientController($firstController);
        $instance->createShipment();
    }
    public function executetrackShipment()
    {
        $firstController = new FirstAPIController();
        $instance = new ClientController($firstController);
        $instance->trackShipment();
    }
}