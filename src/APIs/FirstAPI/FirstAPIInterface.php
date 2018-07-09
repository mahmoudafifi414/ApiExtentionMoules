<?php

namespace API\FirstAPI;

use API\ApiInterface;

interface FirstAPIInterface extends ApiInterface
{
    //functions of the first API interface

    public function createShipmentAndGetWaybill();

    public function getShipmentTrackingDetails();
}
