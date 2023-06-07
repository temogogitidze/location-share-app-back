<?php

namespace App\Services\Trip;

use App\Models\Trip;
use App\Repositories\Trip\TripRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TripService implements TripServiceInterface
{

    public function __construct(private TripRepositoryInterface $repository)
    {
    }

    public function store(ParameterBag $data): Bool
    {
        $user = Auth::user();

        $data->set('user_id' , $user->id);

        return $this->repository->store($data);
    }

    public function get(int $id): ?Trip
    {
        $trip = $this->repository->get($id);

        if ($trip) {
            throw new HttpException(404, 'Cannot find trip');
        }

        return $trip;
    }

    public function update(int $id, ParameterBag $data)
    {
        $data->set('driver_id', Auth::user()->id);

        return $this->repository->update($id, $data);
    }

}
