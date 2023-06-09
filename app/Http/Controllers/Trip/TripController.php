<?php

namespace App\Http\Controllers\Trip;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trip\AcceptTripRequest;
use App\Http\Requests\Trip\EndTripRequest;
use App\Http\Requests\Trip\GetTripRequest;
use App\Http\Requests\Trip\LocationTripRequest;
use App\Http\Requests\Trip\StartTripRequest;
use App\Http\Requests\Trip\StoreTripRequest;
use App\Http\Resources\Trip\TripResource;
use App\Models\Trip;
use App\Services\Trip\TripServiceInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class TripController extends Controller
{

    public function __construct(private TripServiceInterface $service)
    {
    }

    public function store(StoreTripRequest $request): TripResource
    {
        return TripResource::make($this->service->store(new ParameterBag($request->validated())));
    }

    public function get(Trip $trip, GetTripRequest $request): TripResource
    {
        return TripResource::make($this->service->get($trip->id));
    }

    public function accept(Trip $trip, AcceptTripRequest $request): TripResource
    {
        return TripResource::make($this->service->accept($trip->id, new ParameterBag($request->validated())));
    }

    public function start(Trip $trip, StartTripRequest $request): TripResource
    {
        return TripResource::make($this->service->start($trip->id, new ParameterBag($request->validated())));
    }

    public function end(Trip $trip, EndTripRequest $request): TripResource
    {
        return TripResource::make($this->service->end($trip->id, new ParameterBag($request->validated())));
    }

    public function location(Trip $trip, LocationTripRequest $request): TripResource
    {
        return TripResource::make($this->service->location($trip->id, new ParameterBag($request->validated())));
    }
}
