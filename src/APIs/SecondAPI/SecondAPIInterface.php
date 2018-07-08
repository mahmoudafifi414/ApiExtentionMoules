<?php

namespace API\SecondAPI;

use API\ApiInterface;

interface SecondAPIInterface extends ApiInterface
{
    public function createShipmentInfo();

    public function createShipmentInstructions();

    public function getShipmentWaybill();

    public function getShipmentTrackingDetails();
}