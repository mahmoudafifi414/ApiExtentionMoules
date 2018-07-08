<?php

namespace ClientConsumer;


use API\FirstAPI\FirstAPIController;

class ConsumerImplementor
{
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