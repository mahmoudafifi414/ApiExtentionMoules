<?php

namespace API\ThirdAPI;

class ThirdAPIController implements ThirdAPIInterface
{

    public function createShipmentAndGetWaybill()
    {
        // TODO: Implement createShipmentAndGetWaybill() method.
    }

    public function registerNumberToGetTrackingDetails()
    {
        // TODO: Implement registerNumberToGetTrackingDetails() method.
    }

    public function getTrackingDetails()
    {
        // TODO: Implement getTrackingDetails() method.
    }

    public function createShipment()
    {
        echo 'do some logic here in ThirdtAPI<br>';
        $this->createShipmentAndGetWaybill();
    }

    public function trackShipment()
    {
        $this->getTrackingDetails();
    }
}