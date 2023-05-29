<?php

namespace App\Repositories\Driver;

use App\Models\Driver;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\ParameterBag;

class DriverRepository implements DriverRepositoryInterface
{

    public function __construct(private Driver $model)
    {
    }

    public function get(ParameterBag $options)
    {
        $relations = $options->get('relations') ?? null;
        $user = Auth::user();

        return $user->load($relations);
    }

    public function update()
    {
        // TODO: Implement update() method.
    }
}
