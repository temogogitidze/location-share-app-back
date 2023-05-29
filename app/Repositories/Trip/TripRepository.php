<?php

namespace App\Repositories\Trip;

use App\Models\Trip;
use Symfony\Component\HttpFoundation\ParameterBag;

class TripRepository implements TripRepositoryInterface
{


    public function __construct(private Trip $model)
    {
    }

    public function store(ParameterBag $data)
    {

    }
}
