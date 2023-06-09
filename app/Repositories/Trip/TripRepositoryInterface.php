<?php

namespace App\Repositories\Trip;

use App\Models\Trip;
use Symfony\Component\HttpFoundation\ParameterBag;

interface TripRepositoryInterface
{
    public function store(ParameterBag $data): Trip;
    public function get(int $id): ?Trip;
    public function accept(int $id, ParameterBag $data, ParameterBag $options): Trip;
    public function start(int $id, ParameterBag $data, ParameterBag $options): Trip;
    public function end(int $id, ParameterBag $data, ParameterBag $options): Trip;
    public function location(int $id, ParameterBag $data, ParameterBag $options): Trip;
}
