<?php

namespace API\SecondAPI;

use API\ApiInterface;

interface SecondAPIInterface extends ApiInterface
{
    //functions of the second API interface
    public function createShipmentInfo();

    public function createShipmentInstructions();

    public function getShipmentWaybill();

    public function getShipmentTrackingDetails();
}