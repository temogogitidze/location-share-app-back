<?php

namespace App\Services\Auth;

use Symfony\Component\HttpFoundation\ParameterBag;

interface AuthServiceInterface
{
    public function submit(ParameterBag $data);
}
