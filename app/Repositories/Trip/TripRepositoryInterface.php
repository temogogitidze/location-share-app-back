<?php

namespace App\Repositories\Trip;

use App\Models\Trip;
use Symfony\Component\HttpFoundation\ParameterBag;

interface TripRepositoryInterface
{
    public function store(ParameterBag $data): Bool;
    public function get(int $id): ?Trip;
    public function accept(int $id, ParameterBag $data, ParameterBag $options): Trip;

}
