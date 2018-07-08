<?php

namespace API\ThirdAPI;

use API\ApiInterface;

interface ThirdAPIInterface extends ApiInterface
{
    //functions of the third API interface
    public function createShipmentAndGetWaybill();

    public function registerNumberToGetTrackingDetails();

    public function getTrackingDetails();
}