<?php

namespace App\Repositories\Driver;

use Symfony\Component\HttpFoundation\ParameterBag;

interface DriverRepositoryInterface
{
    public function get(ParameterBag $options);
    public function update(ParameterBag $data);
}
