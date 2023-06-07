<?php

namespace App\Repositories\Trip;

use App\Models\Trip;
use Symfony\Component\HttpFoundation\ParameterBag;

class TripRepository implements TripRepositoryInterface
{


    public function __construct(private Trip $model)
    {
    }

    public function store(ParameterBag $data): Trip
    {
        return $this->model->create($data->all());
    }

    public function get(int $id): ?Trip
    {
        return $this->model->where('id', $id)
            ->firstOrFail();
    }

    public function accept(int $id, ParameterBag $data, ParameterBag $options): Trip
    {
        $relations = $options->get('relations') ?? null;

        $updatedTrip = $this->model->where('id', $id)
            ->update([
                'driver_location' => $data->get('driver_location')
            ]);

        return $updatedTrip->with($relations);
    }

    public function start(int $id, ParameterBag $data, ParameterBag $options): Trip
    {
        $relations = $options->get('relations') ?? null;

        $updatedTrip = $this->model->where('id', $id)
            ->update([
                'is_started' => $data->get('is_started')
            ]);

        return $updatedTrip->with($relations);
    }

    public function end(int $id, ParameterBag $data, ParameterBag $options): Trip
    {
        $relations = $options->get('relations') ?? null;

        $updatedTrip = $this->model->where('id', $id)
            ->update([
                'is_complete' => $data->get('is_complete')
            ]);

        return $updatedTrip->with($relations);
    }

    public function location(int $id, ParameterBag $data, ParameterBag $options): Trip
    {
        $relations = $options->get('relations') ?? null;

        $updatedTrip = $this->model->where('id', $id)
            ->update([
                'driver_location' => $data->get('driver_location')
            ]);

        return $updatedTrip->with($relations);
    }
}
