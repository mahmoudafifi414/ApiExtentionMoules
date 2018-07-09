<?php

namespace API\ThirdAPI;

class ThirdAPIController implements ThirdAPIInterface
{

    public function createShipmentAndGetWaybill(): string
    {
        $message = array('status' => 'success');
        return json_encode($message, JSON_PRETTY_PRINT);
    }

    public function registerNumberToGetTrackingDetails()
    {
        // TODO: Implement registerNumberToGetTrackingDetails() method.
    }

    public function getTrackingDetails(): string
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
        return $this->getTrackingDetails();
    }
}