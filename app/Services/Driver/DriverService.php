<?php

namespace App\Services\Driver;

use App\Models\User;
use App\Repositories\Driver\DriverRepositoryInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class DriverService implements DriverServiceInterface
{

    public function __construct(private DriverRepositoryInterface $repository)
    {
    }

    public function get(): User
    {
        $options = new ParameterBag([
            'relations' => ['driver']
        ]);

        return $this->repository->get($options);
    }
    public function update(ParameterBag $data): User
    {
        $name = $data->get('name');

        $options = new ParameterBag([
            'relations' => ['driver']
        ]);

        $data->remove('name');

        return $this->repository->update($data, $options);
    }
}
