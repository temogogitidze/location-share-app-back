<?php

namespace App\Repositories\Driver;

use App\Models\Driver;
use Symfony\Component\HttpFoundation\ParameterBag;

class DriverRepository implements DriverRepositoryInterface
{

    public function __construct(private Driver $model)
    {
    }

    public function get(ParameterBag $options)
    {
        $relations = $options->get('relations') ?? null;
        dd($relations);
        dd($options);
        // TODO: Implement get() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }
}
