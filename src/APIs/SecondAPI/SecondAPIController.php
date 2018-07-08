<?php

namespace API\SecondAPI;

class SecondAPIController implements SecondAPIInterface
{

    public function createShipmentInfo()
    {
       echo 'create shipment info in second API <br>';
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
         echo 'Get Shipment tracking details in second API <br>';
    }

    public function createShipment()
    {
        $this->createShipmentInfo();
    }

    public function trackShipment()
    {
        $this->getShipmentTrackingDetails();
    }
}