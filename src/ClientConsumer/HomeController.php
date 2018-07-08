<?php

namespace ClientConsumer;


use API\FirstAPI\FirstAPIController;

class HomeController
{
    public function execute()
    {
        echo 'ddd';
        $firstController = new FirstAPIController();
        $instance = new ClientController($firstController);
        $instance->createShipment();
    }
}