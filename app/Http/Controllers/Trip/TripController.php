<?php

namespace App\Http\Controllers\Trip;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trip\StoreTripRequest;
use App\Services\Trip\TripServiceInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ParameterBag;

class TripController extends Controller
{

    public function __construct(private TripServiceInterface $service)
    {
    }

    public function store(StoreTripRequest $request)
    {
        return $this->service->store(new ParameterBag($request->validated()));
    }
}
