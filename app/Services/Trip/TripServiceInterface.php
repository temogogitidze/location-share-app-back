<?php

namespace App\Services\Trip;

use App\Models\Trip;
use Symfony\Component\HttpFoundation\ParameterBag;

interface TripServiceInterface
{
    public function store(ParameterBag $data): Trip;
    public function get(int $id): ?Trip;
    public function accept(int $id, ParameterBag $data): Trip;
    public function start(int $id, ParameterBag $data): Trip;
    public function end(int $id, ParameterBag $data): Trip;
    public function location(int $id, ParameterBag $data): Trip;
}
