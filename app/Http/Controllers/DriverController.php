<?php

namespace App\Http\Controllers;

use App\Http\Requests\Driver\GetDriverRequest;
use App\Http\Requests\Driver\UpdateDriverRequest;
use App\Services\Driver\DriverServiceInterface;

class DriverController extends Controller
{

    public function __construct(DriverServiceInterface $service)
    {
    }

    public function get(GetDriverRequest $request)
    {

    }

    public function update(UpdateDriverRequest $request)
    {

    }
}
