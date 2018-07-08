<?php

namespace API\SecondAPI;

class SecondAPIController implements SecondAPIInterface
{

    public function createShipmentInfo()
    {
        // TODO: Implement createShipmentInfo() method.
    }

    public function createShipmentInstructions()
    {
        // TODO: Implement createShipmentInstructions() method.
    }

    public function getShipmentWaybill()
    {
        // TODO: Implement getShipmentWaybill() method.
    }

    public function getShipmentTrackingDetails()
    {
        // TODO: Implement getShipmentTrackingDetails() method.
    }

    public function createShipment()
    {
        echo 'do some logic here in SecondAPI<br>';
        $this->createShipmentInfo();
    }

    public function trackShipment()
    {
        $this->getShipmentTrackingDetails();
    }
}