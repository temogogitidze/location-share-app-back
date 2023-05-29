<?php

namespace App\Repositories\Driver;

use App\Models\User;
use Symfony\Component\HttpFoundation\ParameterBag;

interface DriverRepositoryInterface
{
    public function get(ParameterBag $options): User;
    public function update(ParameterBag $data, ParameterBag $options, string $name): User;
}
