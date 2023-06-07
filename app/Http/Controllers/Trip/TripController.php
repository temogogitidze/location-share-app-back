<?php

namespace App\Http\Controllers\Trip;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trip\AcceptTripRequest;
use App\Http\Requests\Trip\EndTripRequest;
use App\Http\Requests\Trip\GetTripRequest;
use App\Http\Requests\Trip\LocationTripRequest;
use App\Http\Requests\Trip\StartTripRequest;
use App\Http\Requests\Trip\StoreTripRequest;
use App\Models\Trip;
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

    public function get(Trip $trip, GetTripRequest $request): Trip
    {
        return $this->service->get($trip->id);
    }

    public function accept(Trip $trip, AcceptTripRequest $request)
    {
        $this->service->accept($trip->id, new ParameterBag($request->validated()));

    }

    public function start(Trip $trip, StartTripRequest $request)
    {

    }

    public function end(Trip $trip, EndTripRequest $request)
    {

    }

    public function location(Trip $trip, LocationTripRequest $request)
    {

    }
}
