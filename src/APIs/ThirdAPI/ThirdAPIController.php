<?php

namespace API\ThirdAPI;

class ThirdAPIController implements ThirdAPIInterface
{

    public function createShipmentAndGetWaybill()
    {
        echo 'create shipment and get way bill in third API <br>';
    }

    public function registerNumberToGetTrackingDetails()
    {
        // TODO: Implement registerNumberToGetTrackingDetails() method.
    }

    public function getTrackingDetails()
    {
        echo 'get tracking details in third API <br>';
    }

    public function createShipment()
    {
        $this->createShipmentAndGetWaybill();
    }

    public function trackShipment()
    {
        $this->getTrackingDetails();
    }
}