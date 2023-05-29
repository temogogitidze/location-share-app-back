<?php

namespace App\Services\Trip;

use App\Repositories\Trip\TripRepositoryInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class TripService implements TripServiceInterface
{

    public function __construct(private TripRepositoryInterface $repository)
    {
    }

    public function store(ParameterBag $data)
    {
        $this->repository->store($data);
    }

}
