<?php

namespace App\Services\Driver;

use App\Models\User;
use Symfony\Component\HttpFoundation\ParameterBag;

interface DriverServiceInterface
{
    public function get(): User;
    public function update(ParameterBag $data): User;
}
