<?php


interface ThirdAPIInterface
{
    public function createShipmentAndGetWaybill();

    public function registerNumberToGetTrackingDetails();

    public function getTrackingDetails();
}