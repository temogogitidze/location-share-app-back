<?php

namespace App\Services\Trip;

use App\Repositories\Trip\TripRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\ParameterBag;

class TripService implements TripServiceInterface
{

    public function __construct(private TripRepositoryInterface $repository)
    {
    }

    public function store(ParameterBag $data)
    {
        $user = Auth::user();

        $data->set('user_id' , $user->id);

        return $this->repository->store($data);
    }

}
