<?php

namespace API\FirstAPI;

class FirstAPIController implements FirstAPIInterface
{

    public function createShipmentAndGetWaybill(): string
    {
        $message = array('status' => 'success');
        return json_encode($message, JSON_PRETTY_PRINT);
    }

    public function getShipmentTrackingDetails(): string
    {
        $message = array('status' => 'success', 'data' => 'some data');
        return json_encode($message, JSON_PRETTY_PRINT);
    }

    public function createShipment(): string
    {
        return $this->createShipmentAndGetWaybill();
    }

    public function trackShipment(): string
    {
        return $this->getShipmentTrackingDetails();
    }
}
