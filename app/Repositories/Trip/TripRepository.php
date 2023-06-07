<?php

namespace App\Repositories\Trip;

use App\Models\Trip;
use Symfony\Component\HttpFoundation\ParameterBag;

class TripRepository implements TripRepositoryInterface
{


    public function __construct(private Trip $model)
    {
    }

    public function store(ParameterBag $data): Bool
    {
        return $this->model->create($data->all());
    }

    public function get(int $id): ?Trip
    {
        return $this->model->where('id', $id)
            ->firstOrFail();
    }

    public function update(int $id, ParameterBag $data)
    {
        return $this->model->where('id', $id)
            ->update([
                'driver_location' => $data->get('driver_location')
            ]);
    }
}
