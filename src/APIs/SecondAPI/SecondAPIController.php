<?php

namespace API\SecondAPI;

class SecondAPIController implements SecondAPIInterface
{

    public function createShipmentInfo(): string
    {
        $message = array('status' => 'success');
        return json_encode($message, JSON_PRETTY_PRINT);
    }

    public function createShipmentInstructions()
    {
        // TODO: Implement createShipmentInstructions() method.
    }

    public function getShipmentWaybill()
    {
        // TODO: Implement getShipmentWaybill() method.
    }

    public function getShipmentTrackingDetails(): string
    {
        $message = array('status' => 'success', 'data' => 'some data');
        return json_encode($message, JSON_PRETTY_PRINT);
    }

    public function createShipment():string
    {
        return $this->createShipmentInfo();
    }

    public function trackShipment():string
    {
        return $this->getShipmentTrackingDetails();
    }
}