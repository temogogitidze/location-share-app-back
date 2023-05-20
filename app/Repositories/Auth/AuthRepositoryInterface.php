<?php

namespace App\Repositories\Auth;

use Symfony\Component\HttpFoundation\ParameterBag;

interface AuthRepositoryInterface
{
    public function submit(ParameterBag $data);
}
