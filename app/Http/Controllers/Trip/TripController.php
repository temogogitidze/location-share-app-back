<?php

namespace App\Http\Controllers\Trip;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trip\StoreTripRequest;
use App\Services\Trip\TripServiceInterface;
use Illuminate\Http\Request;

class TripController extends Controller
{

    public function __construct(private TripServiceInterface $service)
    {
    }

    public function store(StoreTripRequest $request)
    {

    }
}
