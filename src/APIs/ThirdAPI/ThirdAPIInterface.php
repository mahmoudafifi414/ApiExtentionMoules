<?php

namespace API\ThirdAPI;

use API\ApiInterface;

interface ThirdAPIInterface extends ApiInterface
{
    public function createShipmentAndGetWaybill();

    public function registerNumberToGetTrackingDetails();

    public function getTrackingDetails();
}