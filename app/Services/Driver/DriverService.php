<?php

namespace App\Services\Driver;

use App\Repositories\Driver\DriverRepositoryInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class DriverService implements DriverServiceInterface
{

    public function __construct(private DriverRepositoryInterface $repository)
    {
    }

    public function get()
    {
        $options = new ParameterBag([
            'relations' => ['driver']
        ]);

        return $this->repository->get($options);
    }
    public function update(ParameterBag $data)
    {

    }
}
