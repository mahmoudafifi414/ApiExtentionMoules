<?php

namespace API\FirstAPI;

class FirstAPIController implements FirstAPIInterface
{

    public function createShipmentAndGetWaybill()
    {
        echo 'create shipment And Get Way bill';
    }

    public function getShipmentTrackingDetails()
    {
        // TODO: Implement getShipmentTrackingDetails() method.
    }

    public function createShipment()
    {
        echo 'do some logic here in FirstAPI<br>';
        $this->createShipmentAndGetWaybill();
    }

    public function trackShipment()
    {
        $this->createShipmentAndGetWaybill();
    }
}
