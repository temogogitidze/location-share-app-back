<?php

namespace App\Services\Trip;

use App\Models\Trip;
use Symfony\Component\HttpFoundation\ParameterBag;

interface TripServiceInterface
{
    public function store(ParameterBag $data): Bool;
    public function get(int $id): ?Trip;

}
