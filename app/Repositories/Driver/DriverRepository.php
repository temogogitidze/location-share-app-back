<?php

namespace App\Repositories\Driver;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\ParameterBag;

class DriverRepository implements DriverRepositoryInterface
{
    public function __construct(private Driver $model)
    {
    }

    public function get(ParameterBag $options): User
    {
        $relations = $options->get('relations') ?? null;
        $user = Auth::user();

        return $user->load($relations);
    }

    public function update(ParameterBag $data, ParameterBag $options, string $name): User
    {
        $relations = $options->get('relations') ?? null;

        $user = Auth::user();

        $user->update(['name' => $name]);

        $user->driver()->updateOrCreate($data->all());

        return $user->load($relations);
    }
}
