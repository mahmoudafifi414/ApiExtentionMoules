<?php

namespace API\FirstAPI;

class FirstAPIController implements FirstAPIInterface
{

    public function createShipmentAndGetWaybill()
    {
        echo 'create shipment And Get Way bill in first API<br>';
    }

    public function getShipmentTrackingDetails()
    {
        echo 'get shipment tracking details in first API<br>';
    }

    public function createShipment()
    {
        $this->createShipmentAndGetWaybill();
    }

    public function trackShipment()
    {
        $this->getShipmentTrackingDetails();
    }
}
