<?php

namespace API;

interface ApiInterface
{
    public function createShipment(): string;

    public function trackShipment(): string;
}
