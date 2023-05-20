<?php

namespace App\Repositories\Auth;

use App\Services\Auth\AuthServiceInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class AuthRepository implements AuthServiceInterface
{
    public function submit(ParameterBag $data)
    {
        // TODO: Implement submit() method.
    }
}
