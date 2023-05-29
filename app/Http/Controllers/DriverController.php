<?php

namespace App\Http\Controllers;

use App\Http\Requests\Driver\GetDriverRequest;
use App\Http\Requests\Driver\UpdateDriverRequest;
use App\Services\Driver\DriverServiceInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class DriverController extends Controller
{

    public function __construct(private DriverServiceInterface $service)
    {
    }

    public function get(GetDriverRequest $request)
    {
        return $this->service->get();
    }

    public function update(UpdateDriverRequest $request)
    {
        return $this->service->update(new ParameterBag($request->validated()));
    }
}
