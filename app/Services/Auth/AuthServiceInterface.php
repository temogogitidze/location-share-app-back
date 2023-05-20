<?php

namespace App\Services\Auth;

use App\Models\User;
use Symfony\Component\HttpFoundation\ParameterBag;

interface AuthServiceInterface
{
    public function submit(ParameterBag $data): User;
}
