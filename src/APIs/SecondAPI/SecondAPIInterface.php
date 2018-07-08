<?php


interface SecondAPIInterface
{
    public function createShipmentInfo();

    public function createShipmentInstructions();

    public function getShipmentWaybill();

    public function getShipmentTrackingDetails();
}