<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\AuthServiceInterface;

class LoginController extends Controller
{
    public function __construct(AuthServiceInterface $service)
    {
    }

    public function submit()
    {

    }
}
