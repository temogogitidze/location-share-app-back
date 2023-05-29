<?php

namespace App\Services\Driver;

use Symfony\Component\HttpFoundation\ParameterBag;

interface DriverServiceInterface
{
    public function get();
    public function update(ParameterBag $data);
}
