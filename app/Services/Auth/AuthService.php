<?php

namespace App\Services\Auth;

use App\Repositories\Auth\AuthRepositoryInterface;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AuthService implements AuthServiceInterface
{
    public function __construct(private AuthRepositoryInterface $repository)
    {
    }
    public function submit(ParameterBag $data)
    {
        $user = $this->repository->submit($data);

        if ($user) {
            throw new HttpException(401, 'Could not process user with that phone number');
        }
    }
}
