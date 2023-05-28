<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\VerifyRequest;
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

    public function verify(VerifyRequest $request): string | JsonResponse
    {
        $data = new ParameterBag($request->validated());

        $user = $this->service->verify($data);

        if ($user) {
            return $user->createToken($data->get('login_code'))->plainTextToken;
        }

        return response()->json(['message' => 'Invalid verification code.'], 401);

    }
}
