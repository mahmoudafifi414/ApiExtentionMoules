<?php

namespace API\FirstAPI;

use API\ApiInterface;

interface FirstAPIInterface extends ApiInterface
{
    public function createShipment();

    public function createShipmentAndGetWaybill();

    public function getShipmentTrackingDetails();
}
