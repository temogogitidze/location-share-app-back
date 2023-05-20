<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\AuthServiceInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\ParameterBag;

class LoginController extends Controller
{
    public function __construct(private AuthServiceInterface $service)
    {
    }

    public function submit(LoginRequest $request): JsonResponse
    {
        $this->service->submit(new ParameterBag($request->validated()));

        return response()->json(['message' => 'Text message notification sent']);
    }
}
