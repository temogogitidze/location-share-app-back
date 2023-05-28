<?php

namespace App\Services\Driver;

use App\Repositories\Driver\DriverRepositoryInterface;

class DriverService implements DriverServiceInterface
{

    public function __construct(private DriverRepositoryInterface $repository)
    {
    }

    public function get()
    {
        // TODO: Implement get() method.
    }
    public function update()
    {
        // TODO: Implement update() method.
    }
}
